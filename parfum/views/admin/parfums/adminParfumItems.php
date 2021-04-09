
<?php ob_start(); ?>

<div class="container">

    <h1 class="display-6 text-center border border-5 border border-danger font-monospace m-5 ">Liste Parfums</h1>
    <div class="row">
        <div class="col-4 offset-8">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="input-group">
                <input class="form-control text-center" type="search" name="search" id="search"
                    placeholder="Rechecher...">
                <button type="submit" class="btn btn-outline-secondary" name="soumis"><i
                        class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Marque</th>
                <th>Modele</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Quantite</th>
                <th>Description</th>
                <th>Categorie</th>
                <th colspan="2" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php if(is_array($parf)){ foreach ($parf as  $par) { ?>

                <td>
                    <?=$par->getId_p();?>
                </td>
                <td>
                    <?=$par->getMarque();?>
                </td>
                <td>
                    <?=$par->getModele();?>
                </td>
                <td>
                    <?=$par->getPrix();?>
                </td>
                <td><img src="./assets/images/<?=$par->getImage();?>" alt="" width="100"></td>
                <td>
                    <?=$par->getQuantite();?>
                </td>
                <td>
                    <?=$par->getDescription();?>
                </td>
                <td>
                    <?=$par->getCategorie()->getNom_cat();?>
                </td>
                <td class="text-center">
                    <a class="btn btn-warning" href="index.php?action=edit_par&id=<?=$par->getId_p();?>">
                        <i class="fas fa-pen"></i>
                    </a>
                </td>
                <?php if($_SESSION['Auth']->id_g != 3 ){ ?>
                <td class="text-center">
                    <a class="btn btn-danger" href="index.php?action=delete_par&id=<?=$par->getId_p();?>"
                        onclick="return confirm('Etes vous sûr de ...')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
                <?php } ?>
            </tr>
            <?php }}else{ echo"<tr class='text-center text-danger'><td colspan='10' >".$parf."</td></tr>";} ?>
        </tbody>
    </table>


</div>


<?php 
    $contenu = ob_get_clean();
    require_once('./views/templateAdmin.php');
?>
