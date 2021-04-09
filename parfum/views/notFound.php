<?php ob_start();?>

<div class="container">
<!-- <h2>Page d'erreur</h2> -->
<div class="alert alert-danger">
    <?=$errorMsg;?>
    <div class="text-center">
     <img src="./assets/images/page_404.jpg" alt="">
    </div>
   
</div>
</div>
<?php 
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>