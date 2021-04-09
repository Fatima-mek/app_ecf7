<?php ob_start(); ?>

<div class="container text-center">
    <h2>Echec au cours de paiement</h2>
    <p>Vérifiez vos coordonnées bancaires, Shop around then come back to pay!</p>
    <img src="./assets/images/cancel.png" alt="">
</div>
<?php
$contenu = ob_get_clean();
require_once('./views/public/templatePublic.php');
?>