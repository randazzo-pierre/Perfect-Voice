<?php
namespace src\Model;

class Photo extends User {
    private $id_uti;
    private $id_gal;
    private $pho_photo;
    private $pho_profil;

    public function addPho(\PDO $bdd)
    {
        // Requete d'ajout photo
        try{
            $requete = $bdd->prepare('INSERT INTO t_photo (ID_GAL, PHO_PHOTO, PHO_PROFIL)
                VALUES(:ID_GAL, :PHO_PHOTO, :PHO_PROFIL)');
            $requete->execute([
                "idgal" => $this->getIdGal(),
                "phophoto" => $this->getPhoPhoto(),
                "phoprofil" => $this->getPhoProfil(),
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlDeletePho(\PDO $bdd, $id_uti)
        // Requete delete preference
    {
        try {
            $requete = $bdd->prepare('DELETE FROM t_photo where ID_UTI =:ID_UTI');
            $requete->execute([
                'iduti' => $id_uti
            ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function SqlAllPhoto(\PDO $bdd,$id_uti){
        //requete all photo
        $requete = $bdd->prepare('SELECT PHO_PHOTO,UTI_NOM,UTI_PRENOM FROM t_photo 
                                            INNER JOIN t_utilisateur ON t_photo.ID_GAL = T_utilisateur.ID_UTI  ');
        $requete->execute();
        $arrayPhoto = $requete->fetchAll();
        $listPhoto = [];
        foreach ($arrayPhoto as $PhotoSQL){
            $Photo = new Photo();
            $listPhoto[] = $Photo;
            //var_dump($PhotoSQL);
        }
        return $PhotoSQL;
    }

    public function SqlDelete (\PDO $bdd,$id_uti){
        try{
            $requete = $bdd->prepare('DELETE FROM t_photo where Id = :iduti');
            $requete->execute([
                'iduti' => $id_uti
            ]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

/*    public function SqlAllCUD (\PDO $bdd,$id_uti){
    if ($_POST["Photo"] == "fetch") {
    $requete = "SELECT * FROM t_photo WHERE t_aime.ID_UTI = T_utilisateur.ID_UTI";
    
    if ($_POST["Photo"] == "insert") {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $requete = "INSERT INTO t_photo(PHO_PHOTO) VALUES ('$file')";
    
    }
    
    if ($_POST["Photo"] == "update") {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $requete = "UPDATE t_photo SET PHO_PHOTO = '$file' WHERE ID_UTI = '" . $_POST["image_id"] . "'";
    }
    
    if ($_POST["Photo"] == "delete") {
        $requete = "DELETE FROM t_Photo WHERE ID_UTI = '" . $_POST["image_id"] . "'";
            }
        }
    }
    */


    /**
     * @return mixed
     */
    public function getIdUti()
    {
        return $this->id_uti;
    }

    /**
     * @param mixed $id_uti
     */
    public function setIdUti($id_uti)
    {
        $this->id_uti = $id_uti;
    }

    /**
     * @return mixed
     */
    public function getIdGal()
    {
        return $this->id_gal;
    }

    /**
     * @param mixed $id_gal
     */
    public function setIdGal($id_gal)
    {
        $this->id_gal = $id_gal;
    }

    /**
     * @return mixed
     */
    public function getPhoPhoto()
    {
        return $this->pho_photo;
    }

    /**
     * @param mixed $pho_photo
     */
    public function setPhoPhoto($pho_photo)
    {
        $this->pho_photo = $pho_photo;
    }

    /**
     * @return mixed
     */
    public function getPhoProfil()
    {
        return $this->pho_profil;
    }

    /**
     * @param mixed $pho_profil
     */
    public function setPhoProfil($pho_profil)
    {
        $this->pho_profil = $pho_profil;
    }

}