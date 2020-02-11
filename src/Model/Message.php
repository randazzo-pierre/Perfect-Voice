<?php
namespace src\Model;

class Message extends User {
private $id_mes;
private $id_uti;
private $oth_id_uti;
private $mes_date;
private $mes_fichiers;
private $mes_typefichier;

    /**
     * @return mixed
     */
    public function getIdMes()
    {
        return $this->id_mes;
    }

    /**
     * @param mixed $id_mes
     */
    public function setIdMes($id_mes)
    {
        $this->id_mes = $id_mes;
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
    public function getMesDate()
    {
        return $this->mes_date;
    }

    /**
     * @param mixed $mes_date
     */
    public function setMesDate($mes_date)
    {
        $this->mes_date = $mes_date;
    }

    /**
     * @return mixed
     */
    public function getMesFichiers()
    {
        return $this->mes_fichiers;
    }

    /**
     * @param mixed $mes_fichiers
     */
    public function setMesFichiers($mes_fichiers)
    {
        $this->mes_fichiers = $mes_fichiers;
    }

    /**
     * @return mixed
     */
    public function getMesTypefichier()
    {
        return $this->mes_typefichier;
    }

    /**
     * @param mixed $mes_typefichier
     */
    public function setMesTypefichier($mes_typefichier)
    {
        $this->mes_typefichier = $mes_typefichier;
    }

}