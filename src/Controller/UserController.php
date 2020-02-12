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
        header('Location: ../');
    }
    public function verifyToken($token) {
        if(!isset($_SESSION['token'])) {return false;}
        if(!isset($_POST['token'])) {return false;}
        if($_SESSION['token']!==$token) {return false;}return true;
    }
    public function registerForm(){

        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $this->twig->render('User/inscription1.html.twig',[
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
                $mdp = password_hash($_POST['uti_mdp'], PASSWORD_BCRYPT);
                $log = new User();
                $log->registerUser(Bdd::GetInstance(), $_POST['uti_prenom'], $_POST['uti_nom'],
                    $_POST['uti_ville'], $_POST['uti_tel'], $_POST['uti_sexe'],
                    $_POST['uti_orientation'], $_POST['uti_mail'], $mdp);
                    return $this->twig->render('User/inscription2.html.twig');
                }
        }
        else {
            $token = bin2hex(random_bytes(32));
            var_dump($_POST);
            $_SESSION['token'] = $token;
            return $this->twig->render('User/inscription1.html.twig',
                [
                    'token' => $token
                ]);
        }
    }
    public function loginForm(){
        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $this->twig->render('index.html.twig', [
            'token' => $token
        ]);
    }

    public function loginCheck(){
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $_SESSION['errorlogin'] = "Mail invalide";
                header('Location:/register');
                return;
            }
            $userModel = new User();
            $user = $userModel->getAllUser(Bdd::GetInstance(), $_POST['email']);
            if (password_verify($_POST['password'], $user['UTI_MDP'])) {
                $_SESSION['uti_mail'] = $user['UTI_MAIL'];
                $_SESSION['uti_mdp'] = $user['UTI_MDP'];
                $_SESSION['id_uti'] = $user['ID_UTI'];
                $_SESSION['uti_nom'] = $user['UTI_NOM'];
                $_SESSION['uti_prenom'] = $user['UTI_PRENOM'];
                $_SESSION['uti_naissance'] = $user['UTI_NAISSANCE'];
                $_SESSION['uti_ville'] = $user['UTI_VILLE'];
                $_SESSION['uti_tel'] = $user['UTI_TEL'];
                $_SESSION['uti_sexe'] = $user['UTI_SEXE'];
                $_SESSION['uti_orientation'] = $user['UTI_ORIENTATION'];
                var_dump($_SESSION);
               // header('Location:/Yeah');
            }else {

                $_SESSION['errorlogin'] = "Erreur d'Authentification";
                header('Location:/Login');

            }
        }
    }
    public function test(){
        return $this->twig->render('index.html.twig');
    }
}


