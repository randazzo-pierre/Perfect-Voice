<?php
namespace src\Model;

class Match extends User {
private $id_mat;
private $id_uti;
private $oth_id_uti;
private $mat_like;
private  $mat_temp;
private  $mat_score;

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
    public function getMatTemp()
    {
        return $this->mat_temp;
    }

    /**
     * @param mixed $mat_temp
     */
    public function setMatTemp($mat_temp)
    {
        $this->mat_temp = $mat_temp;
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

}