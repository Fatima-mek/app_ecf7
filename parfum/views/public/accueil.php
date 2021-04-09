<?php ob_start(); ?>

<div class="container">

  <div class="display-6 text-center  text-danger font-monospace m-5">Le parfum, un cadeau personnel comme l'amour</div>

  <div class="offset-8 col-4 text-end mb-2">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="input-group">
      <input class="form-control text-center" type="search" name="search" id="search" placeholder="Rechecher...">
      <button type="submit" class="btn btn-outline-secondary" name="soumis"><i class="fas fa-search"></i></button>
    </form>
  </div>


  <div id="carouselExampleControls" class="carousel slide mt-2" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="./assets/images/image1.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/image4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/image3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!---end carrousel-->

  <div class="row my-3">
    <div class="col-8">
      <div class="row row-cols-1 row-cols-md-2 g-4">

        <?php foreach ($parfums as $parfum) { ?>

          <div class="col">
            <div class="card ">
              <img src="./assets/images/<?= ($parfum->getImage()); ?>" class="card-img-top" height="300" alt="...">
              <div class="card-body">
                <h5 class="bg-secondary text-center text-white card-title fs-2">
                  <!-- <?= strtoupper($parfum->getCategorie()->getNom_cat()); ?>: -->
                  <?= strtoupper($parfum->getMarque()); ?>
                </h5>

                <p class="card-text">
                  <?= $parfum->getDescription(); ?>
                </p>

                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                    <!-- modele -->
                      <?= $parfum->getModele(); ?>
                     <span class="text-danger text-right">
                      <?= $parfum->getPrix(); ?> €
                    </span>
                  </li>
                  
                  <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                    En stock
                    <span class="badge bg-success rounded-pill">
                      <?= $parfum->getQuantite(); ?>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">

                    <form action="index.php?action=checkout" method="post">

                      <input type="hidden" name="id" value="<?= $parfum->getId_p(); ?>">
                      <input type="hidden" name="marque" value="<?= $parfum->getMarque(); ?>">
                      <input type="hidden" name="modele" value="<?= $parfum->getModele(); ?>">
                      <input type="hidden" name="image" value="<?= $parfum->getImage(); ?>">
                      <input type="hidden" name="prix" value="<?= $parfum->getPrix(); ?>">
                      <input type="hidden" name="quantite" value="<?= $parfum->getQuantite(); ?>">

                      <?php if ($parfum->getQuantite() > 0) { ?>
                        <div class="col-12">
                          <button type="submit" class="btn btn-dark" name="envoi">Acheter</button>
                        </div>
                      <?php } ?>

                    </form>
                    <strong class="badge rounded-pill">
                      <?php if ($parfum->getQuantite() == 0) { ?>
                        <a href="index.php?action=order&id=<?= $parfum->getId_p(); ?>" class="btn btn-warning text-white">
                          Commander
                        </a>
                      <?php } ?>
                    </strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
    <!--end cards-->
    <div class="col-4">

      <div class="card mt-1">
        <ul class="list-group list-group-flush">
          <?php foreach ($tabCat as $cat) { ?>
            <li class="list-group-item text-center">
              <a class="btn text-center" href="index.php?id=<?= $cat->getId_cat(); ?>">
                <?= ucfirst($cat->getNom_cat()); ?>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>

  </div>

  <?php
  $contenu = ob_get_clean();
  require_once('views/public/templatePublic.php');
  ?>