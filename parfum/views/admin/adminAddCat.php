<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="display-6 text-center border border-5 border border-danger font-monospace m-5 ">Ajout d'une catégorie</h1>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                <label for="categorie">Catégorie</label>
                <input type="text" id="categorie" name="categorie" class="form-control" placeholder="Entrez une catégorie...">
                <button type="submit" class="btn btn-dark  col-12 mt-5" name="soumis">Ajouter</button>
            </form>
        </div>
    </div>
</div>
<?php
$contenu = ob_get_clean();
require_once('views/templateAdmin.php');
?>