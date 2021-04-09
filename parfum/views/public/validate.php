<?php ob_start();?>

<div class="container text-center">
<h2 class="m-5">Confirmation de commande</h2>
<p class="text-danger">Merci pour votre achat</p> 

<div class="text-center">
    <img src="./assets/images/success.jpg" alt="">
</div>
</div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>