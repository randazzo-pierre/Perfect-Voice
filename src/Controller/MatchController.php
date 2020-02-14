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

}