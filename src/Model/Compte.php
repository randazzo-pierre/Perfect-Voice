<?php
namespace src\Model;

class Compte extends User {
    private $id_uti;
    private $com_lvl;

    public function checkPrio (\PDO $bdd)
    {

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