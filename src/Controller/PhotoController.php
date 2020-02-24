<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\User;
use src\Model\Photo;
use src\Model\Gallerie;
use DateTime;

class PhotoController extends AbstractController{

    public function SqlAllCUD(){
        // acces à la page
        $PhotoSQL = new Photo();
        $Photo = $PhotoSQL->SqlAllPhoto(BDD::getInstance(),$_SESSION['uti_mail']);
        return $this->twig->render('User/Photolist.html.twig',[
            'PhotoList' => $Photo
        ]);
    }

    public function AddPhoto(){
        // ajout de photo
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
        // supprime photo
        $PhotoSQL = new Photo();
        $Photo = $PhotoSQL->SqlGet(BDD::getInstance(),$id_uti);
        $Photo->SqlDelete(BDD::getInstance(),$id_uti);
        if($Photo->getPhoPhoto() != ''){
            unlink('./uploads/images/');
        }

        header('Location:/');
    }

}
