<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\User;
use src\Model\Gallerie;
use DateTime;

class GallerieController extends  UserController {

    public function Gallerie()
    {
        if (isset($_POST['galnom'])) {
            $galnom = $_POST['galnom'];
        }
        mkdir("../photos/".$galnom);
        return $this->twig->render('User/Gallerie.html.twig');
        header('Location:/');
    }
}
