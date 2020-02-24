<?php


namespace src\Model;

use src\Model\Bdd;

class Message
{
    private $id_uti;
    private $oth_id_uti;
    private $mes_message;

    public function SqlgetMessage(\PDO $bdd,$id_uti, $oth_id_uti)
    {
        $requete = $bdd->prepare("SELECT * FROM t_message WHERE (ID_UTI=:id_uti AND OTH_ID_UTI=:oth_id_uti) OR (ID_UTI=:oth_id_uti AND OTH_ID_UTI=:id_uti)");
        $requete->execute([
            'id_uti' => $id_uti,
            'oth_id_uti' => $oth_id_uti
        ]);
        $listMessage = $requete->fetchAll();
        $messages=[];
        foreach ($listMessage as $mess){
            $message = new Message();
            $message->setIdUti($mess['ID_UTI']);
            $message->setOthIdUti($mess['OTH_ID_UTI']);
            $message->setMesMessage($mess['MES_MESSAGE']);
            $messages[] = $message;
        }
        //var_dump($messages);
        return $messages;

    }
    public function sendMessage(\PDO $bdd,$id_uti, $oth_id_uti, $msg)
    {

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