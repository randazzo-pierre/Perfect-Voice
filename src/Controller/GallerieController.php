<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\User;
use src\Model\Gallerie;
use DateTime;

class GallerieController extends  AbstractController {

    public function Gallerie()
    {
        if (isset($_POST['galnom'])) {
            $gal_nom = $_POST['galnom'];
        }

        return $this->twig->render('User/Gallerie.html.twig');
        header('Location:/');
    }
}