<?php
namespace src\Model;

class Signal extends User {
    private $id_sig;
    private $id_uti;
    private $oth_id_uti;
    private $sig_date;

    /**
     * @return mixed
     */
    public function getIdSig()
    {
        return $this->id_sig;
    }

    /**
     * @param mixed $id_sig
     */
    public function setIdSig($id_sig)
    {
        $this->id_sig = $id_sig;
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
    public function getOthIdUti()
    {
        return $this->oth_id_uti;
    }

    /**
     * @param mixed $oth_id_uti
     */
    public function setOthIdUti($oth_id_uti)
    {
        $this->oth_id_uti = $oth_id_uti;
    }

    /**
     * @return mixed
     */
    public function getSigDate()
    {
        return $this->sig_date;
    }

    /**
     * @param mixed $sig_date
     */
    public function setSigDate($sig_date)
    {
        $this->sig_date = $sig_date;
    }

}