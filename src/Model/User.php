<?php
namespace src\Model;
use src\Model\Bdd;

class User
{
    private $id_uti;
    private $uti_mdp;
    private $uti_mail;
    private $uti_nom;
    private $uti_prenom;
    private $uti_naissance;
    private $uti_ville;
    private $uti_tel;
    private $uti_inscription;
    private $uti_sexe;
    private $uti_orientation;
    private $uti_heurecon;
    private $uti_statutcon;

    public function SqlAdd(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO users (username, user_role, user_email, user_password, user_check) VALUES (:Name, :Role, :Email, :Password, :Check)');
            $requete->execute([
                "Username" => $this->getUsername(),
                "Role" => $this->getRole(),
                "Email" => $this->getEmail(),
                "Password" => $this->getPassword(),
                "Check" => $this->getCheck()
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlGet(\PDO $bdd, $Id){
        $requete = $bdd->prepare('SELECT * FROM users where user_id = :Id');
        $requete->execute([
            'Id' => $Id
        ]);
        $datas =  $requete->fetch();
        $user = new User();
        $user->setId($datas['user_id']);
        $user->setUsername($datas['username']);
        $user->setRole(explode(',', $datas['user_role']));
        $user->setEmail($datas['user_email']);
        $user->setPassword($datas['user_password']);
        $user->setCheck($datas['user_check']);
        return $user;
    }

    public function SqlGetAll(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM t_utilisateur');
        $requete->execute();
        $arrayUser = $requete->fetchAll();

        $listUser = [];
        foreach ($arrayUser as $datas){
            $user = new User();
            $user->setId($datas['user_id']);
            $user->setUsername($datas['username']);
            $user->setRole($datas['user_role']);
            $user->setEmail($datas['user_email']);
            $user->setPassword($datas['user_password']);
            $user->setCheck($datas['user_check']);
            $listUser[] = $user;
        }
        return $listUser;
    }

    public function SqlUpdate(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE t_utilisateur SET UTI_MDP=:UTI_MDP,UTI_MAIL=:UTI_MAIL, UTI_NOM=:UTI_NOM, UTI_PRENOM=:UTI_PRENOM, UTI_NAISSANCE=:UTI_NAISSANCE,UTI_VILLE=:UTI_VILLE, UTI_TEL=:UTI_TEL, UTI_INSCRIPTION=:UTI_INSCRIPTION, UTI_SEXE=:UTI_SEXE,UTI_ORIENTATION=:UTI_ORIENTATION WHERE ID_UTI =:ID_UTI');
            $requete->execute([
                "UTI_MDP" => $this->getUtiMdp(),
                "UTI_MAIL" => $this->getUtiMail(),
                "UTI_NOM" => $this->getUtiNom(),
                "UTI_PRENOM" => $this->getUtiPrenom(),
                'UTI_NAISSANCE' => $this->getUtiNaissance(),
                'UTI_VILLE' => $this->getUtiVille(),
                'UTI_TEL' => $this->getUtiTel(),
                'UTI_SEXE' => $this->getUtiSexe(),
                'UTI_ORIENTATION' => $this->getUtiOrientation(),
                'UTI_HEURECON' => $this->getUtiHeurecon()
            ]);
            return array("result"=>true);
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }
    public function getUserLogin(\PDO $bdd, $email){
        $requete = $bdd->prepare("SELECT UTI_MAIL, UTI_MDP FROM t_utilisateur WHERE UTI_MAIL = ?");
        $requete -> execute(array($email));
        $datas = $requete ->fetch();
        return $datas;
    }
    function registerUser(\PDO $bdd, $uti_prenom, $uti_nom, $uti_ville, $uti_tel, $uti_sexe, $uti_orientation, $uti_mail, $mdp){
        try{
            $requete=$bdd->prepare("INSERT INTO t_utilisateur (UTI_PRENOM, UTI_NOM, UTI_VILLE, UTI_TEL, UTI_SEXE, UTI_ORIENTATION, UTI_MAIL, UTI_MDP) VALUES (:prenom, :nom, :ville, :tel, :sexe, :orientation, :mail, :mdp);");
            $requete->execute([
                'prenom' => $uti_prenom,
                'nom' => $uti_nom,
                'ville' => $uti_ville,
                'tel' => $uti_tel,
                'sexe' => $uti_sexe,
                'orientation' => $uti_orientation,
                'mail' => $uti_mail,
                'mdp' => $mdp
            ]);
            return;
        }catch (\Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function getAllUser(\PDO $bdd, $email){
        try{
            $requete = $bdd->prepare('SELECT * FROM t_utilisateur WHERE UTI_MAIL = ?');
            $requete->execute(array($email));
            $userDatas = $requete->fetch();
            return $userDatas;

        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlGetAllUser(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM t_utilisateur');
        $requete->execute();
        $arrayUsers = $requete->fetchAll();

        $listUser = [];
        foreach ($arrayUsers as $userSQL){
            $user = new User();
            $user->setIdUti($userSQL['ID_UTI']);
            $user->setUtiMdp($userSQL['UTI_MDP']);
            $user->setUtiMail($userSQL['UTI_MAIL']);
            $user->setUtiNom($userSQL['UTI_NOM']);
            $user->setUtiPrenom($userSQL['UTI_PRENOM']);
            $user->setUtiNaissance($userSQL['UTI_NAISSANCE']);
            $user->setUtiVille($userSQL['UTI_VILLE']);
            $user->setUtiTel($userSQL['UTI_TEL']);
            $user->setUtiInscription($userSQL['UTI_INSCRIPTION']);
            $user->setUtiSexe($userSQL['UTI_SEXE']);
            $user->setUtiOrientation($userSQL['UTI_ORIENTATION']);
            $user->setUtiHeurecon($userSQL['UTI_HEURECON']);
            $user->setUtiStatutcon($userSQL['UTI_STATUTCON']);
            $listUser[] = $user;
        }
        return $listUser;
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
    public function getUtiMdp()
    {
        return $this->uti_mdp;
    }

    /**
     * @param mixed $uti_mdp
     */
    public function setUtiMdp($uti_mdp)
    {
        $this->uti_mdp = $uti_mdp;
    }

    /**
     * @return mixed
     */
    public function getUtiMail()
    {
        return $this->uti_mail;
    }

    /**
     * @param mixed $uti_mail
     */
    public function setUtiMail($uti_mail)
    {
        $this->uti_mail = $uti_mail;
    }

    /**
     * @return mixed
     */
    public function getUtiNom()
    {
        return $this->uti_nom;
    }

    /**
     * @param mixed $uti_nom
     */
    public function setUtiNom($uti_nom)
    {
        $this->uti_nom = $uti_nom;
    }

    /**
     * @return mixed
     */
    public function getUtiPrenom()
    {
        return $this->uti_prenom;
    }

    /**
     * @param mixed $uti_prenom
     */
    public function setUtiPrenom($uti_prenom)
    {
        $this->uti_prenom = $uti_prenom;
    }

    /**
     * @return mixed
     */
    public function getUtiNaissance()
    {
        return $this->uti_naissance;
    }

    /**
     * @param mixed $uti_naissance
     */
    public function setUtiNaissance($uti_naissance)
    {
        $this->uti_naissance = $uti_naissance;
    }

    /**
     * @return mixed
     */

    public function getUtiVille()
    {
        return $this->uti_ville;
    }

    /**
     * @param mixed $uti_ville
     */
    public function setUtiVille($uti_ville)
    {
        $this->uti_ville = $uti_ville;
    }

    /**
     * @return mixed
     */
    public function getUtiTel()
    {
        return $this->uti_tel;
    }

    /**
     * @param mixed $uti_tel
     */
    public function setUtiTel($uti_tel)
    {
        $this->uti_tel = $uti_tel;
    }

    /**
     * @return mixed
     */
    public function getUtiInscription()
    {
        return $this->uti_inscription;
    }

    /**
     * @param mixed $uti_inscription
     */
    public function setUtiInscription($uti_inscription)
    {
        $this->uti_inscription = $uti_inscription;
    }

    /**
     * @return mixed
     */
    public function getUtiSexe()
    {
        return $this->uti_sexe;
    }

    /**
     * @param mixed $uti_sexe
     */
    public function setUtiSexe($uti_sexe)
    {
        $this->uti_sexe = $uti_sexe;
    }

    /**
     * @return mixed
     */
    public function getUtiOrientation()
    {
        return $this->uti_orientation;
    }

    /**
     * @param mixed $uti_orientation
     */
    public function setUtiOrientation($uti_orientation)
    {
        $this->uti_orientation = $uti_orientation;
    }

    /**
     * @return mixed
     */
    public function getUtiHeurecon()
    {
        return $this->uti_heurecon;
    }

    /**
     * @param mixed $uti_heurecon
     */
    public function setUtiHeurecon($uti_heurecon)
    {
        $this->uti_heurecon = $uti_heurecon;
    }

    /**
     * @return mixed
     */
    public function getUtiStatutcon()
    {
        return $this->uti_statutcon;
    }

    /**
     * @param mixed $uti_statutcon
     */
    public function setUtiStatutcon($uti_statutcon)
    {
        $this->uti_statutcon = $uti_statutcon;
    }
}