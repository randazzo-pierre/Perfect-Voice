<?php


namespace src\Controller;
use src\Model\Bdd;
use src\Model\Match;
use src\Model\User;

class MatchController extends  AbstractController{
    public function ShowMatchOTH($id_uti){
        //UserController::idTest($id_uti);
        $matchs = new Match();
        $matchList = $matchs->SqlGetOTH(Bdd::GetInstance(), $id_uti);
        //var_dump($matchList);
        return $this->twig->render('Match/mesvoix.html.twig',[
            "matchs"=>$matchList
        ]);
    }
    public function MatchAdd($id)
    {
        if (isset($_SESSION['token'])) {
//            $list = (new Match())->SqlGetAll(Bdd::GetInstance(), $_SESSION['ID_UTI']);
//            if (!in_array($id, $list)) {
                $match = new Match();
                $match->SqlAdd(Bdd::GetInstance(), $id);
                header("location:/list");
//            } else {
 //               $L = new Match();
   //             $L->SqlDelete(Bdd::GetInstance(), $_SESSION['USER']->getUID(), $id);
     //           $_SESSION['USER'] = (new Utilisateur)->SqlGet(Bdd::GetInstance(), $_SESSION['USER']->getUID());
       //         header("location:/Mate/List");
        //}
        } else {
            header('Location:/Login');
        }
    }
    public function MatchMesvoix(){
        $match = new Match();
        $list = $match->SqlGetOTH(Bdd::GetInstance(),$_SESSION['id_uti']);
        return $this->twig->render('Match/mesvoix.html.twig',[
            "matchs"=>$list
        ]);
    }
    public function MatchVotrevoix(){
        $match = new Match();
        $list = $match->SqlGetUTI(Bdd::GetInstance(),$_SESSION['id_uti']);
        return $this->twig->render('Match/votrevoix.html.twig',[
            "matchs"=>$list
        ]);
    }

    public function ShowLike($iduser){
        UserController::idNeed($iduser);
        $likes=new Like();
        $listlikes=$likes->SqlGetUserLike(Bdd::GetInstance(),$iduser);
        return $this->twig->render('Like/like.html.twig',[
            "likes"=>$listlikes
        ]);
    }

}