<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vente de parfums</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/templatePublic.css">


</head>

<body>
  <header>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class=" badge rounded text-center">
          <a class="navbar-brand" href="index.php"> <img src="./assets/images/perfume2.png" class="" width="100" alt=""></a>
         <p><i >Best Perfumes</i></p> 
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-5">
              <a class="nav-link active fs-4" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link fs-4" href="index.php?action=apropos">A propos</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link fs-4" href="index.php?action=contact">Contact</a>
            </li>


          </ul>
          <p class="text-center"><i class="fab fa-facebook text-white px-3 fs-4"></i><i class="fab fa-instagram text-white px-3 fs-4"></i><i class="fab fa-snapchat text-white px-3 fs-4"></i><i class="fab fa-facebook-messenger text-white px-3 fs-4"></i></p>


        </div>
      </div>
    </nav>
  </header>


  <main>
    <?= $contenu; ?>
  </main>
  <footer id="footer">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Best Perfumes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active px-3" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item px-5"> <a class="nav-link active" href="">Condition générale</a></li>
            <li class="nav-item px-5"><a class="nav-link active" href="">Politique de confidentialité</a></li>
            <li class="nav-item px-5"><a class="nav-link active" href="">faq</a></li>
            <li> <input type="text" placeholder="Votre newsletter..."><button class="btn btn-secondary px-5 ">Envoyer</button></li>
          </ul>

          <span class="text-right text-white"> <a class="text-white" style="text-decoration:none" href="http://localhost/php/app_ecf7/parfum/index.php?action=login">Copyright</a><i class="fa fa-copyright" aria-hidden="true"></i>2021</span>
        </div>
      </div>
    </nav>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./assets/js/scriptStripe.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>