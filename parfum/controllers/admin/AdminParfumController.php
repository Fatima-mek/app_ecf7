<?php

class AdminParfumController{

    private $adpm;
    
    public function __construct()
    {
        $this->adpm = new AdminParfumModel();
        $this->adcat = new AdminCategorieModel();
    }

    public function listParfum(){
        AuthController::isLogged();

        if(isset($_POST['soumis']) && !empty($_POST['search'])){
            $search = trim(htmlspecialchars(addslashes($_POST['search'])));

            $parf = $this->adpm->getParfum($search);
            require_once('./views/admin/parfums/adminParfumItems.php');
        }else{
            $parf = $this->adpm->getParfum();
            require_once('./views/admin/parfums/adminParfumItems.php');
        }
    }

    public function addParfum(){
        AuthController::isLogged();

        if(isset($_POST['soumis']) && !empty($_POST['marque']) && !empty($_POST['prix'])){
            $marque = trim(htmlentities(addslashes($_POST['marque'])));
            $modele = trim(htmlentities(addslashes($_POST['modele'])));
            $prix = trim(htmlentities(addslashes($_POST['prix'])));
            $quantite = trim(htmlentities(addslashes($_POST['quantite'])));
            $id_cat = trim(htmlentities(addslashes($_POST['cat'])));
            $description = trim(htmlentities(addslashes($_POST['desc'])));
            $image = $_FILES['image']['name'];

            $newP = new Parfum();
            $newP->setMarque($marque);
            $newP->setModele($modele);
            $newP->setPrix($prix);
            $newP->setQuantite($quantite);
            $newP->getCategorie()->setId_cat($id_cat);
            $newP->setDescription($description);
            $newP->setImage($image);

            $destination = './assets/images/';
            move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);
            $ok = $this->adpm->insertParfum($newP); 
            if($ok){
                header('location:index.php?action=list_par');
            }
        }
       $tabCat = $this->adcat->getCategories();
        require_once('./views/admin/parfums/adminAddParfum.php');
    }

    public function removeParfum(){
        AuthController::isLogged();
        AuthController::accessUser();
        
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            $id = $_GET['id'];
            $delP = new Parfum();
            $delP->setId_p($id);
            $nb = $this->adpm->deleteParfum($delP);
 
            if($nb > 0){
                header('location:index.php?action=list_par');
            }
            
        } 

    }

    public function editParfum(){
        AuthController::isLogged();
        
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            $id = $_GET['id'];
            $editP = new Parfum();
            $editP->setId_p($id);
            $editPar = $this->adpm->parfumItem($editP);
            
           $tabCat = $this->adcat->getCategories();
           
           if(isset($_POST['soumis']) && !empty($_POST['marque']) && !empty($_POST['prix'])){
               
               $marque = trim(htmlentities(addslashes($_POST['marque'])));
               $modele = trim(htmlentities(addslashes($_POST['modele'])));
               $prix = trim(htmlentities(addslashes($_POST['prix'])));
               $quantite = trim(htmlentities(addslashes($_POST['quantite'])));
               $id_cat = trim(htmlentities(addslashes($_POST['cat'])));
               $description = trim(htmlentities(addslashes($_POST['desc'])));
               $image = $_FILES['image']['name'];
               
               $editPar->setMarque($marque);
               $editPar->setModele($modele);
               $editPar->setPrix($prix);
               $editPar->setQuantite($quantite);
               $editPar->getCategorie()->setId_cat($id_cat);
               $editPar->setDescription($description);
               $editPar->setImage($image);
               
               $destination = './assets/images/';
               move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);
               $ok = $this->adpm->updateParfum($editPar); 
               
                   header('location:index.php?action=list_par');
            
            }
            require_once('./views/admin/parfums/adminEditP.php');
        }

    }

}