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
            $requete = $bdd->prepare('INSERT INTO t_photo (ID_GAL,PHO_PHOTO,PHO_PROFIL)
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
            $requete = $bdd->prepare('DELETE FROM t_photo where Id =:ID_UTI');
            $requete->execute([
                'iduti' => $id_uti
            ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
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