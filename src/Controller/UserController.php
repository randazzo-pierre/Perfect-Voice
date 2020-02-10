<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\User;
use DateTime;

class UserController extends  AbstractController {


    public function Admin(){
        $role = UserController::roleP();
        if($role == "2") {
            return $this->twig->render('Article/Admin.html.twig');
        }else{
            return $this->twig->render('User/erreur.html.twig');
        }
    }
    public function registe(){
        return $this->twig->render('User/register.html.twig');
    }

    public function erreur()
    {
        return $this->twig->render('User/erreur.html.twig');
    }

    public function loginForm(){
        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $this->twig->render('User/login.html.twig', [
            'token' => $token
        ]);
    }
    public function utilisateur(){
        unset($_SESSION['errorlogin']);
        return $this->twig->render('Article/utilisateur.html.twig');
    }
    public function Validation(){
        unset($_SESSION['errorlogin']);
        return $this->twig->render('Article/Validation.html.twig');
    }

    public function CategorieArticle(){
        unset($_SESSION['errorlogin']);
        return $this->twig->render('Article/CategorieArticle.html.twig');
    }

    public function GestionArticle(){
        unset($_SESSION['errorlogin']);
        return $this->twig->render('Article/gestionArticle.html.twig');
    }

    public function InscriptionValidation(){
        unset($_SESSION['errorlogin']);
        return $this->twig->render('Article/inscription.html.twig');
    }
    public function ListAllAdminUser(){
        $user = new User();
        $listUser = $user->SqlGetAll(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Article/adminUser.html.twig',[
                'articleList' => $listUser
            ]
        );
    }
    public function loginCheck(){
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            if(!filter_var($_POST['uti_mail'],FILTER_VALIDATE_EMAIL)){
                $_SESSION['errorlogin'] = "Mail invalide";
                header('Location:/register');
                return;
            }
            $user = new user();
            $log = $user->getUserLogin(Bdd::GetInstance(), $_POST['uti_mail']);
            if($_POST["uti_mail"]==$log['UTI_MAIL'] AND password_verify($_POST["uti_mdp"], $log['UTI_MDP'])){
                $_SESSION['uti_mail'] = $log['UTI_MAIL'];
                $_SESSION['uti_mdp'] = $log['UTI_MDP'];
               // $role = UserController::roleP();
              //  if($role == "2") {
             //       header('Location:/Admin');
             //   }else {
             //       header('Location:/');
           //     }
                header('Location:/Yeah');
            }
            else {
                $_SESSION['errorlogin'] = "Erreur d'Authentificationnn";
                header('Location:/Loginn');
            }
        }
    }

    public static function roleP()
    {
        if (isset($_SESSION['email']) AND $_SESSION['password']) {
            $emailUser = $_SESSION['email'];
            $passwordUser = $_SESSION['password'];
            $user = new User();
            $userData = $user->logCheck(Bdd::GetInstance(), $emailUser, $passwordUser);
            $userRole = $userData['user_role'];

            if ($userRole == 0) {
                $roleP = "0";
                return $roleP;
            } else if ($userRole == 1) {
                $roleP = "1";
                return $roleP;
            } else if ($userRole == 2) {
                $roleP = "2";
                return $roleP;
            }
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);
        unset($_SESSION['role']);
        session_destroy();
        header('Location:/Login');
    }
    public function verifyToken($token) {
        if(!isset($_SESSION['token'])) {return false;}
        if(!isset($_POST['token'])) {return false;}
        if($_SESSION['token']!==$token) {return false;}return true;
    }
    public function registerForm(){

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $this->twig->render('User/register.html.twig',[
            'inscrit'=>1
            ,'token' => $token
        ]);
    }

    public function registerCheck(){
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            if (isset($_POST['uti_prenom']) && isset($_POST['uti_nom'])
                && isset($_POST['uti_ville']) && isset($_POST['uti_tel'])
                && isset($_POST['uti_sexe']) && isset($_POST['uti_orientation'])
                && isset($_POST['uti_mail']) && isset($_POST['uti_mdp'])) {
                $log = new user();
                $registerCheck = $log->registerUser(Bdd::GetInstance(), $_POST['uti_prenom'], $_POST['uti_nom'],
                    $_POST['uti_ville'], $_POST['uti_tel'], $_POST['uti_sexe'],
                    $_POST['uti_orientation'], $_POST['uti_mail'], $_POST['uti_mdp']);

                    return $this->twig->render('User/login.html.twig');
                }
            }
        else {
            $token = bin2hex(random_bytes(32));

            $_SESSION['token'] = $token;
            return $this->twig->render('User/register.html.twig',
                [
                    'token' => $token
                ]);
        }
    }
}


