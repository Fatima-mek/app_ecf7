$(function(){
    const stripe = Stripe("pk_test_51Id9IwHTOaWQqEWgaCbKhO6t2Mj7lPE6mikA8DOcoGu6d4EchTArsDreUzCqlIeq0Ie5EyhpkrzSPccy1V8wB7M600DzDBLKKi");
    const checkoutButton = $('#checkout-button');
    checkoutButton.on('click', function(e){
        e.preventDefault();
        console.log($('#nb').val());
        $.ajax({
            url:'index.php?action=pay',
            method:'post',
            data:{
                id: $('#ref').val(),
                marque: $('#marque').val(),
                modele: $('#modele').val(),
                prix: $('#prix').val(),
                email: $('#email').val(),
                quantite: $('#quant').val(), 
                nb: $('#nb').val()
            },
            datatype: 'json',
            success:function(session){
                console.log(session);
                return stripe.redirectToCheckout({ sessionId: session.id});
            },
            error: function(){
                console.error("fail to send!");

            }
        });
    });
});