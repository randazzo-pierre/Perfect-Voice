<?php
namespace src\Model;
use src\Controller;

class Article extends Contenu implements \JsonSerializable {
    private $Auteur;
    private $DateAjout;
    private $ImageRepository;
    private $ImageFileName;

    public function SqlGetLast(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM articles ORDER BY DateAjout DESC LIMIT 5');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);

            $listArticle[] = $article;
        }
        return $listArticle;
    }
    public function firstXwords($nb){
        $phrase = $this->getDescription();
        $arrayWord = str_word_count($phrase,1);

        return implode(" ",array_slice($arrayWord,0,$nb));
    }

    public function Sqlsearch(\PDO $bdd,$MotRecherche)
    {
        // requete du moteur de recherche integré
        $requete = $bdd->prepare('SELECT * FROM articles where Etat = 2 and Titre like :search');
        $requete->execute(
            ['search'=>"%".$MotRecherche."%"]
        );

        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL) {
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            //$article->setCategorie($articleSQL['Categorie']);

            $listArticle[] = $article;
        }
        return $listArticle;
    }


    public function SqlAdd(\PDO $bdd) {
        // Requete d'ajout
        try{
            $requete = $bdd->prepare('INSERT INTO articles (Titre, Description, DateAjout, Auteur, ImageRepository, ImageFileName, Etat)
                VALUES(:Titre, :Description, :DateAjout, :Auteur, :ImageRepository, :ImageFileName, 1)');
            $requete->execute([
                "Titre" => $this->getTitre(),
                "Description" => $this->getDescription(),
                "DateAjout" => $this->getDateAjout(),
                "Auteur" => $this->getAuteur(),
                "ImageRepository" => $this->getImageRepository(),
                "ImageFileName" => $this->getImageFileName(),
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlGetAll(\PDO $bdd){
            $requete = $bdd->prepare('SELECT * FROM articles');
            $requete->execute();
            $arrayArticle = $requete->fetchAll();

            $listArticle = [];
            foreach ($arrayArticle as $articleSQL){
                $article = new Article();
                $article->setId($articleSQL['Id']);
                $article->setTitre($articleSQL['Titre']);
                $article->setAuteur($articleSQL['Auteur']);
                $article->setDescription($articleSQL['Description']);
                $article->setDateAjout($articleSQL['DateAjout']);
                $article->setImageRepository($articleSQL['ImageRepository']);
                $article->setImageFileName($articleSQL['ImageFileName']);

                $listArticle[] = $article;
            }
            return $listArticle;
    }
    public function SqlGet(\PDO $bdd,$idArticle){
        $requete = $bdd->prepare('SELECT * FROM articles where Id = :idArticle');
        $requete->execute([
            'idArticle' => $idArticle
        ]);

        $datas =  $requete->fetch();

        $article = new Article();
        $article->setId($datas['Id']);
        $article->setTitre($datas['Titre']);
        $article->setAuteur($datas['Auteur']);
        $article->setDescription($datas['Description']);
        $article->setDateAjout($datas['DateAjout']);
        $article->setImageRepository($datas['ImageRepository']);
        $article->setImageFileName($datas['ImageFileName']);

        return $article;


    }

    public function SqlUpdate(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE articles set Titre=:Titre, Description=:Description, DateAjout=:DateAjout, Auteur=:Auteur, ImageRepository=:ImageRepository, ImageFileName=:ImageFileName WHERE id=:IDARTICLE');
            $requete->execute([
                'Titre' => $this->getTitre()
                ,'Description' => $this->getDescription()
                ,'DateAjout' => $this->getDateAjout()
                ,'Auteur' => $this->getAuteur()
                ,'ImageRepository' => $this->getImageRepository()
                ,'ImageFileName' => $this->getImageFileName()
                ,'IDARTICLE' => $this->getId()
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlDelete (\PDO $bdd,$idArticle){
        try{
            $requete = $bdd->prepare('DELETE FROM articles where Id = :idArticle');
            $requete->execute([
                'idArticle' => $idArticle
            ]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function SqlTruncate (\PDO $bdd){
        try{
            $requete = $bdd->prepare('TRUNCATE TABLE articles');
            $requete->execute();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function jsonSerialize()
    {
        return [
            'Id' => $this->getId()
            ,'Titre' => $this->getTitre()
            ,'Description' => $this->getDescription()
            ,'DateAjout' => $this->getDateAjout()
            ,'ImageRepository' => $this->getImageRepository()
            ,'ImageFileName' => $this->getImageFileName()
            ,'Auteur' => $this->getAuteur()
        ];
    }

    public function SqlValidator(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM articles WHERE Etat = 1');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $listArticle[] = $article;
        }
        return $listArticle;
    }
    public function Sqlchange($bdd,$idArticle){
        $requete = $bdd->prepare('update articles set Etat = 2 where Id=:idArticle');
        $requete->execute([
            'idArticle' => $idArticle
        ]);
    }
    public function SqlValider(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO articles (Etat) VALUES(2) where id = id.Article');
            $requete->execute();
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->Auteur;
    }

    /**
     * @param mixed $Auteur
     * @return Article
     */
    public function setAuteur($Auteur)
    {
        $this->Auteur = $Auteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->DateAjout;
    }

    /**
     * @param mixed $DateAjout
     * @return Article
     */
    public function setDateAjout($DateAjout)
    {
        $this->DateAjout = $DateAjout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageRepository()
    {
        return $this->ImageRepository;
    }

    /**
     * @param mixed $ImageRepository
     * @return Article
     */
    public function setImageRepository($ImageRepository)
    {
        $this->ImageRepository = $ImageRepository;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFileName()
    {
        return $this->ImageFileName;
    }

    /**
     * @param mixed $ImageFileName
     * @return Article
     */
    public function setImageFileName($ImageFileName)
    {
        $this->ImageFileName = $ImageFileName;
        return $this;
    }


}