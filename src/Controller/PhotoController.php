<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\User;
use src\Model\Photo;
use src\Model\Gallerie;
use DateTime;

class PhotoController extends UserController {

    public function addPhoto(){
        if ($_POST AND $_SESSION['token'] == $_POST['token']) {
            $sqlRepository = null;
            $ = null;
            if (!empty($_FILES['image']['name'])) {
                $tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
                $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                if (in_array(strtolower($extension), $tabExt)) {
                    $nomImage = md5(uniqid()) . '.' . $extension;
                    $repository = './uploads/images/' . $dateNow->format('Y/m');
                    if (!is_dir($repository)) {
                        mkdir($repository, 0777, true);
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'], $repository . '/' . $nomImage);
                }
            }
    }
}