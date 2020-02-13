<?php


namespace src\Controller;
use src\Model\Bdd;
use src\Model\Match;
use src\Model\User;

class MatchController extends  AbstractController{
    public function ShowMatOTH($id_uti){
        UserController::idTest($id_uti);
        $match = new Match();
        $match->SqlGetOTH(Bdd::GetInstance(), $id_uti);
        return $this->twig->render('Match',[
            "match"=>$match
        ]);
    }
}