<?php
namespace src\Model;

class Gallerie extends User{
    private $id_uti;
    private  $id_gal;
    private  $gal_nom;

    public function addGal(\PDO $bdd)
    {
        // Requete d'ajout gallerie
        try{
            $requete = $bdd->prepare('INSERT INTO t_gallerie (ID_GAL,GAL_NOM)
                VALUES(:ID_GAL, :GAL_NOM)');
            $requete->execute([
                "idgal" => $this->getIdGal(),
                "galnom" => $this->getGalNom(),
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function updateGal(\PDO $bdd)
    {
        // Requete update preference
        try{
            $requete = $bdd->prepare('UPDATE t_gallerie set ID_GAL=:ID_GAL, GAL_NOM=:GAL_NOM WHERE id=:ID_UTI');
            $requete->execute([
                "idgal" => $this->getIdGal(),
                "galnom" => $this->getGalNom(),
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }

    }

    public function deleteGal(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('DELETE FROM t_gallerie where Id =:ID_UTI');
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
    public function getGalNom()
    {
        return $this->gal_nom;
    }

    /**
     * @param mixed $gal_nom
     */
    public function setGalNom($gal_nom)
    {
        $this->gal_nom = $gal_nom;
    }
}