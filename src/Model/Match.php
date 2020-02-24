<?php
namespace src\Model;
use src\Model\Bdd;
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

    public function SqlGetOTH(\PDO $bdd , $id){
        $uti = $bdd->prepare('SELECT * FROM t_match WHERE ID_UTI=:id_uti');
        $uti->execute([
            'id_uti'=>$id
        ]);
        $ArrayLike=$uti->fetchAll();
        $listOTH=[];
        foreach ($ArrayLike as $likeSQL){
            $oth = new Match();
            $oth->setIdUti($likeSQL['ID_UTI']);
            $oth->setOthIdUti($likeSQL['OTH_ID_UTI']);
            $listOTH[]=$oth;
        }
        return $listOTH;
    }
    public function SqlGetUTI(\PDO $bdd , $id){
        $uti = $bdd->prepare('SELECT * FROM t_match WHERE OTH_ID_UTI=:id_uti');
        $uti->execute([
            'id_uti'=>$id
        ]);
        $ArrayLike=$uti->fetchAll();
        $listOTH=[];
        foreach ($ArrayLike as $likeSQL){
            $oth = new Match();
            $oth->setIdUti($likeSQL['ID_UTI']);
            $oth->setOthIdUti($likeSQL['OTH_ID_UTI']);
            $listOTH[]=$oth;
        }
        return $listOTH;
    }

    public function SqlDeleteMat(\PDO $bdd, $id_uti)
    {
        // Requete Delete match
            $requete = $bdd->prepare('DELETE FROM t_match where ID_UTI =:ID_UTI');
            $requete->execute([
                'ID_UTI' => $id_uti
            ]);
            return true;
    }
    public function SqlGetAll(\PDO $bdd, $id) {
        $requete = $bdd->prepare('SELECT * FROM t_match WHERE ID_UTI =:ID_UTI');
        $requete->execute(['ID_UTI' => $id]);
        $data = $requete->fetchAll();
        $list = [];
        foreach ($data as $match) {
            $list[] = $match['ID_UTI'];
        }

        return $list;
    }
    public function SqlAdd(\PDO $bdd, $id)
    {
        $requete = $bdd->prepare('INSERT INTO t_match (ID_UTI, OTH_ID_UTI) VALUES (:ID_UTI, :OTH_ID_UTI)');
        $requete->execute([
            'ID_UTI' => $_SESSION['id_uti'],
            'OTH_ID_UTI' => $id]);
        return;
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