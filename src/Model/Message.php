<?php


namespace src\Model;


class Message
{
    private $id_uti;
    private $oth_id_uti;
    private $mes_message;

    public function sendMessage($id_uti, $oth_id_uti, $msg)
    {

        $bdd = Bdd::GetInstance();
        $envoyer = $bdd->prepare("INSERT INTO `t_message` (`ID_UTI`, `OTH_ID_UTI`, `MES_MESSAGE`) 
        VALUES (:id_uti, :oth_id_uti, :msg)");
        $rSql = $envoyer->execute([
            'id_uti' => $id_uti,
            'oth_id_uti' => $oth_id_uti,
            'msg' => $msg
        ]);
        return $rSql;
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
    public function getMesMessage()
    {
        return $this->mes_message;
    }

    /**
     * @param mixed $mes_message
     */
    public function setMesMessage($mes_message)
    {
        $this->mes_message = $mes_message;
    }

}