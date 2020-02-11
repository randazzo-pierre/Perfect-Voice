<?php
namespace src\Model;

class Compte extends User {
    private $id_uti;
    private $com_lvl;

    public function addCom (\PDO $bdd)
    {

    }

    public Function updateCom(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE t_compte set COM_LVL=:COM_LVL WHERE id=:ID_UTI');
            $requete->execute([
                "ComLvl" => $this->getComLvl(),
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
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
    public function getComLvl()
    {
        return $this->com_lvl;
    }

    /**
     * @param mixed $com_lvl
     */
    public function setComLvl($com_lvl)
    {
        $this->com_lvl = $com_lvl;
    }

}