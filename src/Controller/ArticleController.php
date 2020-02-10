<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use DateTime;

class ArticleController extends AbstractController {

    public function Index(){
        return $this->ListAll();
    }

    public function ListAll(){
        $article = new Article();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Article/list.html.twig',[
                'articleList' => $listArticle
            ]
        );
    }
    public function ListAllAdmin(){
        $article = new Article();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Article/admin.html.twig',[
                'articleList' => $listArticle
            ]
        );
    }

    public function add(){
        $role = UserController::roleP();
        if($role == "2" OR $role == "1") {
            if ($_POST AND $_SESSION['token'] == $_POST['token']) {
                $sqlRepository = null;
                $nomImage = null;
                if (!empty($_FILES['image']['name'])) {
                    $tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
                    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    if (in_array(strtolower($extension), $tabExt)) {
                        $nomImage = md5(uniqid()) . '.' . $extension;
                        $dateNow = new DateTime();
                        $sqlRepository = $dateNow->format('Y/m');
                        $repository = './uploads/images/' . $dateNow->format('Y/m');
                        if (!is_dir($repository)) {
                            mkdir($repository, 0777, true);
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'], $repository . '/' . $nomImage);
                    }
                }
                $article = new Article();
                $article->setTitre($_POST['Titre'])
                    ->setDescription($_POST['Description'])
                    ->setAuteur($_POST['Auteur'])
                    ->setDateAjout($_POST['DateAjout'])
                    ->setImageRepository($sqlRepository)
                    ->setImageFileName($nomImage);
                $article->SqlAdd(BDD::getInstance());
                header('Location:/Article');
            } else {
                $token = bin2hex(random_bytes(32));
                $_SESSION['token'] = $token;
                return $this->twig->render('Article/add.html.twig',
                    [
                        'token' => $token
                    ]);
            }
        }else {
            $_SESSION['errorlogin'] = "Erreur d'Authentification";
            header('Location:/erreur');
        }
    }

    public function search(){
        $article = new Article();
        $MotRecherche = strip_tags($_POST['search']); //tente de retourner la chaîne str après avoir supprimé tous les octets nuls,
        //toutes les balises PHP et HTML du code. Elle génère des alertes si les balises sont incomplètes ou erronées.
        $listArticle = $article->Sqlsearch(Bdd::GetInstance(),$MotRecherche);


        return $this->twig->render(
            'Article/List.html.twig',[ //TWIG
                'articleList' => $listArticle
            ]
        );
    }

    public function update($articleID){
        $articleSQL = new Article();
        $article = $articleSQL->SqlGet(BDD::getInstance(),$articleID);
        if($_POST){
            $sqlRepository = null;
            $nomImage = null;
            if(!empty($_FILES['image']['name']) )
            {
                $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                $extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                if(in_array(strtolower($extension),$tabExt))
                {
                    $nomImage = md5(uniqid()) .'.'. $extension;
                    $dateNow = new DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = './uploads/images/'.$dateNow->format('Y/m');
                    if(!is_dir($repository)){
                        mkdir($repository,0777,true);
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'], $repository.'/'.$nomImage);
                    // suppression ancienne image si existante

                    if($_POST['imageAncienne'] != '/'){
                        unlink('./uploads/images/'.$_POST['imageAncienne']);
                    }
                }
            }

            $article->setTitre($_POST['Titre'])
                ->setDescription($_POST['Description'])
                ->setAuteur($_POST['Auteur'])
                ->setDateAjout($_POST['DateAjout'])
                ->setImageRepository($sqlRepository)
                ->setImageFileName($nomImage)
            ;

            $article->SqlUpdate(BDD::getInstance());
        }

        return $this->twig->render('Article/update.html.twig',[
            'article' => $article
        ]);
    }

    public function Delete($articleID){
        $articleSQL = new Article();
        $article = $articleSQL->SqlGet(BDD::getInstance(),$articleID);
        $article->SqlDelete(BDD::getInstance(),$articleID);
        if($article->getImageFileName() != ''){
            unlink('./uploads/images/'.$article->getImageRepository().'/'.$article->getImageFileName());
        }

        header('Location:/');
    }

    public function fixtures(){
        $arrayAuteur = array('Fabien', 'Brice', 'Bruno', 'Jean-Pierre', 'Benoit', 'Emmanuel', 'Sylvie', 'Marion');
        $arrayTitre = array('PHP en force', 'React JS une valeur montante', 'C# toujours au top', 'Java en légère baisse'
        , 'Les entreprises qui recrutent', 'Les formations à ne pas rater', 'Les langages populaires en 2020', 'L\'année du Javascript');
        $dateajout = new DateTime();
        $article = new Article();
        $article->SqlTruncate(BDD::getInstance());
        for($i = 1;$i <=200; $i++){
            shuffle($arrayAuteur);
            shuffle($arrayTitre);

            $dateajout->modify('+'.$i.' day');

            $article->setTitre($arrayTitre[0])
                ->setDescription('On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).')
                ->setDateAjout($dateajout->format('Y-m-d'))
                ->setAuteur($arrayAuteur[0]);
            $article->SqlAdd(BDD::getInstance());
        }
        header('Location:/Article');
    }


    public function Write(){

        $article = new Article();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());

        $file = 'article.json';
        if(!is_dir('./uploads/file/')){

            mkdir('./uploads/file/', 0777, true);
        }
        file_put_contents('./uploads/file/'.$file, json_encode($listArticle));

        header('location:/Article/');
    }

    public function Read(){
        $file='article.json';
        $datas = file_get_contents('./uploads/file/'.$file);
        $contenu = json_decode($datas);

        return $this->twig->render('Article/readfile.html.twig', [
            'fileData' => $contenu
        ]);
    }
    public function views($idArticle)
    {
        $article = new Article();
        $articleData = $article->SqlGet(Bdd::GetInstance(), $idArticle);

        return $this->twig->render('Article/view.html.twig', [
            'articleData' => $articleData
        ]);
    }

    public function WriteOne($idArticle){
        $article = new Article();
        $articleData = $article->SqlGet(Bdd::GetInstance(), $idArticle);

        $file = 'article_'.$idArticle.'.json';
        if(!is_dir('./uploads/file/')){
            mkdir('./uploads/file/', 0777, true);
        }
        file_put_contents('./uploads/file/'.$file, json_encode($articleData));

        header('location:/Article/');
    }

    public function test($param1,$param2){
        var_dump($param1);
        var_dump($param2);
    }

    public function View(){

        return $this->twig->render('Article/view.html.twig');
    }


    public function ListValidator(){
        $article = new Article();
        $listArticle = $article->SqlValidator(Bdd::GetInstance());

        return $this->twig->render(
            'Article/Validation.html.twig',[
                'articleList' => $listArticle
            ]
        );
    }

    public function Validation(){
        $article = new Article();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());

        return $this->twig->render(
            'Article/Validation.html.twig',[
                'articleList' => $listArticle
            ]
        );
    }

    public function Val($articleID){
        $articleSQL = new Article();
        $article = $articleSQL->Sqlchange(Bdd::GetInstance(), $articleID);

        header('Location:/Article/Validation');
    }

}
