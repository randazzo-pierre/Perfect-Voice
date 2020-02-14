<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\User;
use src\Model\Photo;
use src\Model\Gallerie;
use DateTime;

class PhotoController extends AbstractController{

    public function AddPhoto(){
        if ($_POST AND $_SESSION['token'] == $_POST['token']) {
            $sqlRepository = null;
            $pho_photo = null;
            if (!empty($_FILES['image']['name'])) {
                $tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
                $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                if (in_array(strtolower($extension), $tabExt)) {
                    $nomImage = md5(uniqid()) . '.' . $extension;
                    $repository = './uploads/images/';
                    if (!is_dir($repository)) {
                        mkdir($repository, 0777, true);
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'], $repository . '/' . $nomImage);
                }
            }
        }
    }


    public function DeletePhoto($id_uti){
        $PhotoSQL = new Photo();
        $Photo = $PhotoSQL->SqlGet(BDD::getInstance(),$id_uti);
        $Photo->SqlDelete(BDD::getInstance(),$id_uti);
        if($Photo->getPhoPhoto() != ''){
            unlink('./uploads/images/');
        }

        header('Location:/');
    }


public function SqlAllCUD(){

    return $this->twig->render('User/Photolist.html.twig');
  }

}
