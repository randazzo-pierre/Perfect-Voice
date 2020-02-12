<?php
namespace src\Model;

class Aime extends User {
    private $id_uti;
    private $aim_music;
    private $aim_music_pref;
    private $aim_film;
    private $aim_film_pref;
    private $aim_event;
    private $aim_event_pref;
    private $aim_sport;
    private $aim_sport_pref;
    private $aim_livre;
    private $aim_livre_pref;
    private $aim_cuisine;
    private $aim_cuisine_pref;
    private $aim_jeuxvideo;
    private $aim_jeuxvideo_pref;
    private $aim_manuel;
    private $aim_manuel_pref;   
    private $aim_animaux;
    private $aim_animaux_pref;
    private $aim_descrip;


    public function SqlAddAim(\PDO $bdd) {
        // Requete d'ajout preference
        try{
            $requete = $bdd->prepare('INSERT INTO t_aime (AIM_MUSIC,AIM_MUSIC_PREF,AIM_FILM,AIM_FILM_PREF,AIM_EVENT,AIM_EVENT_PREF,AIM_SPORT,AIM_SPORT_PREF,AIM_LIVRE,AIM_LIVRE_PREF,AIM_CUISINE,AIM_CUISINE_PREF,AIM_JEUXVIDEO,AIM_JEUXVIDEO_PREF,AIM_MANUEL,AIM_MANUEL_PREF,AIM_ANIMAUX,AIM_ANIMAUX_PREF,AIM_DESCRIP)
                VALUES(:AIM_MUSIC,:AIM_MUSIC_PREF,:AIM_FILM,:AIM_FILM_PREF,:AIM_EVENT,:AIM_EVENT_PREF,:AIM_SPORT,:AIM_SPORT_PREF,:AIM_LIVRE,:AIM_LIVRE_PREF,:AIM_CUISINE,:AIM_CUISINE_PREF,:AIM_JEUXVIDEO,:AIM_JEUXVIDEO_PREF,:AIM_MANUEL,:AIM_MANUEL_PREF,:AIM_ANIMAUX,:AIM_ANIMAUX_PREF,:AIM_DESCRIP)');
            $requete->execute([
                "aimmusic" => $this->getaimmusic(),
                "aimmusicpref" => $this->getaimmusicpref(),
                "aimfilm" => $this->getaimfilm(),
                "aimfilmpref" => $this->getaimfilmpref(),
                "aimevent" => $this->getaimevent(),
                "aimeventpref" => $this->getaimeventpref(),
                "aimsport" => $this->getaimsport(),
                "aimsportpref" => $this->getaimsportpref(),
                "aimlivre" => $this->getaimlivre(),
                "aimlivrepref" => $this->getaimlivrepref(),
                "aimcuisine" => $this->getaimcuisine(),
                "aimcuisinepref" => $this->getaimcuisinepref(),
                "aimjeuxvideo" => $this->getaimjeuxvideo(),
                "aimejeuxvideopref" => $this->getaimjeuxvideopref(),
                "aimmanuel" => $this->getaimmanuel(),
                "aimmanuelpref" => $this->getaimmanuelpref(),
                "aimanimaux" => $this->getaimanimaux(),
                "aimanimauxpref" => $this->getaimanimauxpref(),
                "aimdescrip" => $this->getaimdescrip(),
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlUpdateAim(\PDO $bdd)
    {
        // Requete update preference
        try{
            $requete = $bdd->prepare('UPDATE t_aime set AIM_MUSIC=:AIM_MUSIC ,AIM_MUSIC_PREF=:AIM_MUSIC_PREF,AIM_FILM=:AIM_FILM,AIM_FILM_PREF=:AIM_FILM_PREF,AIM_EVENT=:AIM_EVENT,AIM_EVENT_PREF=:AIM_EVENT_PREF,
            AIM_SPORT=:AIM_SPORT,AIM_SPORT_PREF:=AIM_SPORT_PREF,AIM_LIVRE=:AIM_LIVRE,AIM_LIVRE_PREF=:AIM_LIVRE_PREF,AIM_CUISINE=:AIM_CUISINE,AIM_CUISINE_PREF=:AIM_CUISINE_PREF,AIM_JEUXVIDEO=:AIM_JEUXVIDEO,AIM_JEUXVIDEO_PREF=:AIM_JEUXVIDEO_PREF,AIM_MANUEL=:AIM_MANUEL,AIM_MANUEL_PREF=:AIM_MANUEL_PREF,AIM_ANIMAUX=:AIM_ANIMAUX,AIM_ANIMAUX_PREF=:AIM_ANIMAUX_PREF,AIM_DESCRIP=:AIM_DESCRIP WHERE id=:ID_UTI');
            $requete->execute([
                "aimmusic" => $this->getaimmusic(),
                "aimmusicpref" => $this->getaimmusicpref(),
                "aimfilm" => $this->getaimfilm(),
                "aimfilmpref" => $this->getaimfilmpref(),
                "aimevent" => $this->getaimevent(),
                "aimeventpref" => $this->getaimeventpref(),
                "aimsport" => $this->getaimsport(),
                "aimsportpref" => $this->getaimsportpref(),
                "aimlivre" => $this->getaimlivre(),
                "aimlivrepref" => $this->getaimlivrepref(),
                "aimcuisine" => $this->getaimcuisine(),
                "aimcuisinepref" => $this->getaimcuisinepref(),
                "aimjeuxvideo" => $this->getaimjeuxvideo(),
                "aimejeuxvideopref" => $this->getaimjeuxvideopref(),
                "aimmanuel" => $this->getaimmanuel(),
                "aimmanuelpref" => $this->getaimmanuelpref(),
                "aimanimaux" => $this->getaimanimaux(),
                "aimanimauxpref" => $this->getaimanimauxpref(),
                "aimdescrip" => $this->getaimdescrip(),
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlDelete(\PDO $bdd, $id_uti)
        // Requete delete preference
    {
        try {
            $requete = $bdd->prepare('DELETE FROM t_aime where Id =:ID_UTI');
            $requete->execute([
                'iduti' => $id_uti
            ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }



    /**
     * @return mixed
     */
    public function getiduti()
    {
        return $this->id_uti;
    }

    /**
     * @param mixed $id_uti
     */
    public function setiduti($id_uti)
    {
        $this->id_uti = $id_uti;
    }

    /**
     * @return mixed
     */
    public function getaimmusic()
    {
        return $this->aim_music;
    }

    /**
     * @param mixed $aim_music
     */
    public function setaimmusic($aim_music)
    {
        $this->aim_music = $aim_music;
    }

    /**
     * @return mixed
     */
    public function getaimmusicpref()
    {
        return $this->aim_music_pref;
    }

    /**
     * @param mixed $aim_music_pref
     */
    public function setaimmusicpref($aim_music_pref)
    {
        $this->aim_music_pref = $aim_music_pref;
    }

    /**
     * @return mixed
     */
    public function getaimfilm()
    {
        return $this->aim_film;
    }

    /**
     * @param mixed $aim_film
     */
    public function setaimfilm($aim_film)
    {
        $this->aim_film = $aim_film;
    }

    /**
     * @return mixed
     */
    public function getaimfilmpref()
    {
        return $this->aim_film_pref;
    }

    /**
     * @param mixed $aim_film_pref
     */
    public function setaimfilmpref($aim_film_pref)
    {
        $this->aim_film_pref = $aim_film_pref;
    }

    /**
     * @return mixed
     */
    public function getaimevent()
    {
        return $this->aim_event;
    }

    /**
     * @param mixed $aim_event
     */
    public function setaimevent($aim_event)
    {
        $this->aim_event = $aim_event;
    }

    /**
     * @return mixed
     */
    public function getaimeventpref()
    {
        return $this->aim_event_pref;
    }

    /**
     * @param mixed $aim_event_pref
     */
    public function setaimeventpref($aim_event_pref)
    {
        $this->aim_event_pref = $aim_event_pref;
    }

    /**
     * @return mixed
     */
    public function getaimsport()
    {
        return $this->aim_sport;
    }

    /**
     * @param mixed $aim_sport
     */
    public function setaimsport($aim_sport)
    {
        $this->aim_sport = $aim_sport;
    }

    /**
     * @return mixed
     */
    public function getaimsportpref()
    {
        return $this->aim_sport_pref;
    }

    /**
     * @param mixed $aim_sport_pref
     */
    public function setaimsportpref($aim_sport_pref)
    {
        $this->aim_sport_pref = $aim_sport_pref;
    }

    /**
     * @return mixed
     */
    public function getaimlivre()
    {
        return $this->aim_livre;
    }

    /**
     * @param mixed $aim_livre
     */
    public function setaimlivre($aim_livre)
    {
        $this->aim_livre = $aim_livre;
    }

    /**
     * @return mixed
     */
    public function getaimlivrepref()
    {
        return $this->aim_livre_pref;
    }

    /**
     * @param mixed $aim_livre_pref
     */
    public function setaimlivrepref($aim_livre_pref)
    {
        $this->aim_livre_pref = $aim_livre_pref;
    }

    /**
     * @return mixed
     */
    public function getaimcuisine()
    {
        return $this->aim_cuisine;
    }

    /**
     * @param mixed $aim_cuisine
     */
    public function setaimcuisine($aim_cuisine)
    {
        $this->aim_cuisine = $aim_cuisine;
    }

    /**
     * @return mixed
     */
    public function getaimcuisinepref()
    {
        return $this->aim_cuisine_pref;
    }

    /**
     * @param mixed $aim_cuisine_pref
     */
    public function setaimcuisinepref($aim_cuisine_pref)
    {
        $this->aim_cuisine_pref = $aim_cuisine_pref;
    }

    /**
     * @return mixed
     */
    public function getaimjeuxvideo()
    {
        return $this->aim_jeuxvideo;
    }

    /**
     * @param mixed $aim_jeuxvideo
     */
    public function setaimjeuxvideo($aim_jeuxvideo)
    {
        $this->aim_jeuxvideo = $aim_jeuxvideo;
    }

    /**
     * @return mixed
     */
    public function getaimjeuxvideopref()
    {
        return $this->aim_jeuxvideo_pref;
    }

    /**
     * @param mixed $aim_jeuxvideo_pref
     */
    public function setaimjeuxvideopref($aim_jeuxvideo_pref)
    {
        $this->aim_jeuxvideo_pref = $aim_jeuxvideo_pref;
    }

    /**
     * @return mixed
     */
    public function getaimmanuel()
    {
        return $this->aim_manuel;
    }

    /**
     * @param mixed $aim_manuel
     */
    public function setaimmanuel($aim_manuel)
    {
        $this->aim_manuel = $aim_manuel;
    }

    /**
     * @return mixed
     */
    public function getaimmanuelpref()
    {
        return $this->aim_manuel_pref;
    }

    /**
     * @param mixed $aim_manuel_pref
     */
    public function setaimmanuelpref($aim_manuel_pref)
    {
        $this->aim_manuel_pref = $aim_manuel_pref;
    }

    /**
     * @return mixed
     */
    public function getaimanimaux()
    {
        return $this->aim_animaux;
    }

    /**
     * @param mixed $aim_animaux
     */
    public function setaimanimaux($aim_animaux)
    {
        $this->aim_animaux = $aim_animaux;
    }

    /**
     * @return mixed
     */
    public function getaimanimauxpref()
    {
        return $this->aim_animaux_pref;
    }

    /**
     * @param mixed $aim_animaux_pref
     */
    public function setaimanimauxpref($aim_animaux_pref)
    {
        $this->aim_animaux_pref = $aim_animaux_pref;
    }

    /**
     * @return mixed
     */
    public function getaimdescrip()
    {
        return $this->aim_descrip;
    }

    /**
     * @param mixed $aim_descrip
     */
    public function setaimdescrip($aim_descrip)
    {
        $this->aim_descrip = $aim_descrip;
    }

}