<?php ob_start(); ?>

<div class="container">
    <h2 class="text-center">Qui sommes nous?</h2>
    <p><strong>service chez Best Perfumes, c'est un état d'esprit, une attention quotidienne et un projet permanent. Être le n°1 du service : c’est notre ambition. Bienveillantes, passionnées et de bon conseil</strong> , les conseillères Best Perfumes mettent leur expertise au service de leurs clients. Attentives à leurs besoins, elles délivrent à chacun d’entre eux des conseils personnalisés, grâce à leur connaissance pointue des produits et prennent soin de faire vivre aux clients une expérience d’achat unique en instaurant proximité et convivialité au sein des boutiques Best Perfumes.
    </p>
    <p>
        Best Perfumes propose une carte fidélité des plus généreuses. Elle permet de bénéficier d’offres exclusives tout au long de l'année : avantages anniversaire, cadeaux surprises, invitations à des événements magasins, soirées prestiges, ventes privées, remises, newsletters… <br />

        Et pour permettre à ses clients d’offrir la beauté et le bien-être en toute simplicité, Best Perfumes propose les Cartes cadeaux et les Cartes Instituts, disponibles en magasin ou sur nocibe.fr.
    </p>
    <div class="text-center">
        <img src="./assets/images/parfums2.PNG" alt="">
    </div>

    <hr />
    <h2 class="text-danger">Best Perfumes, l'entreprise</h2>
    <p>
        Expertise, plaisir, partage, accessibilité : Best Perfumes se distingue par des valeurs fortes partagées par l’ensemble des collaborateurs. Ancrées dans notre ADN, elles sont les piliers sur lesquels nous bâtissons notre ambition de n°1 du service.

        Parce que l’expertise de nos collaborateurs est au cœur de notre performance nous nous donnons les moyens de la développer. Aujourd’hui, grâce à un parcours de formation d’une ampleur inégalée, nous avons diplômé près de 950 collaborateurs (responsables, adjointes, esthéticiennes, conseillères beauté) en l’espace de 4 ans, et nous poursuivons cette action en 2018 et 2019 pour nos directrices de magasins et notre encadrement commercial. Nous portons une attention particulière à vos talents et savons saisir les opportunités pour faire évoluer votre carrière : 50% de nos responsables de magasins sont issus de la promotion interne.

        Chez Best Perfumes, vous êtes le principal acteur de votre carrière. Nous vous donnons la possibilité de révéler vos talents et d'évoluer au sein de l’entreprise. Grâce à un parcours d’intégration et de formations adaptées, nous favorisons votre développement professionnel et répondons aux orientations stratégiques de l’entreprise.

        Best Perfumes mise aussi sur l’innovation pour aller de l’avant et surprendre ses clients. Son concept de magasin, ses produits, ses prestations de services témoignent de ce dynamisme et de cette créativité qui la font progresser au quotidien.
    </p>
</div>
<div class="text-center">
    <img src="./assets/images/parfums.PNG" alt="">

</div>

<?php
$contenu = ob_get_clean();
require_once('views/public/templatePublic.php');
?>