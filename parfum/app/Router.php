<?php

// require_once('./models/Driver.php');
// require_once('./models/Categorie.php');
// require_once('./models/Parfum.php');
// require_once('./models/Grade.php');
// require_once('./models/Utilisateurs.php');
// require_once('./models/admin/AdminCategorieModel.php');
// require_once('./controllers/admin/AdminCategorieController.php');
// require_once('./models/admin/AdminParfumModel.php');
// require_once('./controllers/admin/AdminParfumController.php');
// require_once('./models/admin/AdminUtilisateurModel.php');
// require_once('./controllers/admin/AdminUtilisateurController.php');
// require_once('./models/admin/AdminGradeModel.php');
// require_once('./controllers/admin/AdminGradeController.php');
// require_once('./controllers/admin/AuthController.php');
require_once('./app/autoload.php');


class Router{

    private $ctrcat;
    private $ctrpar;
    private $ctru;
    private $ctrg;
    private $ctrpub;

    public function __construct()
    {
        $this->ctrcat = new AdminCategorieController();
        $this->ctrpar = new AdminParfumController();
        $this->ctru = new AdminUtilisateurController();
        $this->ctrg = new AdminGradeController();
        $this->ctrpub = new PublicController();


    }

    public function getPath(){

        try{
            if(isset($_GET['action'])){

                switch($_GET['action']){
                    case 'list_cat':
                        $this->ctrcat->listCategories();
                        break;
                    case 'delete_cat': 
                        $this->ctrcat->removeCat();
                        break; 
                    case 'edit_cat':
                        $this->ctrcat->editCat();
                        break;
                    case 'add_cat':
                        $this->ctrcat->addCat();
                        break;
                    case 'list_par':
                        $this->ctrpar->listParfum();
                        break;    
                    case 'add_par':
                        $this->ctrpar->addParfum();
                        break;
                    case 'delete_par':
                        $this->ctrpar->removeParfum();
                        break;
                    case 'edit_par':
                        $this->ctrpar->editParfum();
                        break;        
                    case 'list_u':
                        $this->ctru->listUsers();
                        break;
                    case 'login':
                        $this->ctru->login();
                        break;
                    case 'logout':
                        AuthController::logout();
                        break;
                    case 'register':
                        $this->ctru->addUser();
                        break; 
                    case 'list_g':
                        $this->ctrg ->listGrades();
                        break; 
                    case 'checkout':
                        $this->ctrpub ->recap();
                        break; 
                    case 'order' :
                        $this->ctrpub ->orderParfum();
                        break;
    
                    case 'pay':
                        $this->ctrpub ->payment();
                        break;
                    case 'success':
                        $this->ctrpub ->confirmation();
                        break;
        
                    case 'cancel':
                        $this->ctrpub ->annuler();
                        break;  
                    
                    case 'apropos':
                        $this->ctrpub ->apropos();
                        break; 

                    case 'contact':
                        $this->ctrpub ->contact();
                        break;               

                    case 'validate':
                        $this->ctrpub ->validate();
                        break;                   
                    default:
                        throw new Exception('Action non définie'); 
                         
                    } 
                }else{
                    $this->ctrpub->getPubParfum();
                    session_unset();
                } 
        } catch (Exception $e) {
            $this->page404($e->getMessage());
        }
    }

    private function page404($errorMsg){
        require_once('./views/notFound.php');
    }      
}