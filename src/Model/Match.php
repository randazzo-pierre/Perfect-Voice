<?php
namespace src\Model;
use mysql_xdevapi\Exception;

class Match implements \JsonSerializable
{
    private $id_mat;
    private $id_uti;
    private $oth_id_uti;
    private $mat_like;
    private $mat_date;
    private $mat_score;
    /**
     * @return mixed
     */
    public function getIdMat()
    {
        return $this->id_mat;
    }

    /**
     * @param mixed $id_mat
     */
    public function setIdMat($id_mat)
    {
        $this->id_mat = $id_mat;
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
    public function getMatLike()
    {
        return $this->mat_like;
    }

    /**
     * @param mixed $mat_like
     */
    public function setMatLike($mat_like)
    {
        $this->mat_like = $mat_like;
    }

    /**
     * @return mixed
     */
    public function getMatDate()
    {
        return $this->mat_date;
    }

    /**
     * @param mixed $mat_date
     */
    public function setMatDate($mat_date)
    {
        $this->mat_date = $mat_date;
    }

    /**
     * @return mixed
     */
    public function getMatScore()
    {
        return $this->mat_score;
    }

    /**
     * @param mixed $mat_score
     */
    public function setMatScore($mat_score)
    {
        $this->mat_score = $mat_score;
    }


    public function SqlAddMat(\PDO $bdd)
    {
        // Requete d'ajout match
        try {
            $requete = $bdd->prepare('INSERT INTO t_match (ID_MAT, OTH_ID_UTI, MAT_LIKE, MAT_TEMP, MAT_SCORE)
                VALUES(:ID_MAT, :OTH_ID_UTI, :MAT_LIKE, :MAT_TEMP, :MAT_SCORE)');
            $requete->execute([
                "IdMat" => $this->getIdMat(),
                "OthIdUti" => $this->getOthIdUti(),
                "MatLike" => $this->getMatLike(),
                "MatTemp" => $this->getMatDate(),
                "MatScore" => $this->getMatScore(),
            ]);
            return array("result" => true, "message" => $bdd->lastInsertId());
        } catch (\Exception $e) {
            return array("result" => false, "message" => $e->getMessage());
        }
    }

    public function SqlUpdateMat(\PDO $bdd)
    {
        // Requete update match
        try {
            $requete = $bdd->prepare('UPDATE t_match set ID_MAT=:ID_MAT, OTH_ID_UTI=:OTH_ID_UTI, MAT_LIKE=:MAT_LIKE, MAT_DATE=:MAT_DATE, MAT_SCORE=:MAT_SCORE WHERE ID_UTI=:ID_UTI');
            $requete->execute([
                "ID_MAT" => $this->getIdMat(),
                "OTH_ID_UTI" => $this->getOthIdUti(),
                "MAT_LIKE" => $this->getMatLike(),
                "MAT_DATE" => $this->getMatDate(),
                "MAT_SCORE" => $this->getMatScore(),
            ]);
            return array("0", "[OK] Update");
        } catch (\Exception $e) {
            return array("1", "[ERREUR] " . $e->getMessage());
        }
    }

    public function SqlGetOTH(\PDO $bdd , $id_uti){
        $query = $bdd->prepare('SELECT * FROM t_match WHERE OTH_ID_UTI=:id_uti');
        $query->execute([
            'id_uti'=>$id_uti
        ]);
        $ArrayLike=$query->fetchAll();

        $listOTH=[];
        foreach ($ArrayLike as $likeSQL){
            $oth = new Match();
            $oth->setIdUti($likeSQL['id_uti']);
            $oth->setOthIdUti($likeSQL['oth_id_uti']);
            $oth->setMatDate($likeSQL['like_date']);

            $listOTH[]=$oth;
        }
        return $listOTH;
    }

    public function SqlDeleteMat(\PDO $bdd, $id_uti)
    {
        // Requete Delete match
        try {
            $requete = $bdd->prepare('DELETE FROM t_match where ID_UTI =:ID_USER');
            $requete->execute([
                'ID_USER' => $id_uti
            ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'id_mat' => $this->getIdMat(),
            'id_uti' => $this->getMatLike(),
            'oth_id_uti' => $this->getOthIdUti(),
            'mat_like' => $this->getMatDate()
        ];
    }
}