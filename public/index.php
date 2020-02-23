<?php
session_start();
require '../vendor/autoload.php';

function chargerClasse($classe){
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__."{$ds}.."; //Remonte d'un cran par rapport à index.php
    $classeName = str_replace('\\', $ds,$classe);

    $file = "{$dir}{$ds}{$classeName}.php";
    if(is_readable($file)){
        require_once $file;
    }
}

spl_autoload_register('chargerClasse');

$router = new \src\Router\Router($_GET['url']);
$router->get('/', "User#loginForm");
$router->post('/', 'User#loginCheck');
$router->get('/list', 'User#ListAll');
$router->get('/Mesvoix/:id_uti', 'Match#ShowMatchOTH#id_uti');

$router->get('/Messages/:oth_id_uti', "Message#showMsg#oth_id_uti");
$router->post('/Messages/:oth_id_uti', "Message#sendMsg#oth_id_uti");


$router->get('/Contact', 'Contact#showForm');
$router->post('/Contact/sendMail', 'Contact#sendMail');
//$router->get('/Login', 'User#loginForm');
//$router->post('/Login', 'User#loginCheck');
$router->get('/Logout', 'User#logout');


$router->get('/Register', 'User#registerForm');
$router->post('/Register', 'User#registerCheck');
$router->get('/Modify', 'User#modifyForm');
$router->post('/Modify', 'User#modifyCheck');
$router->get('/Profil', 'User#profilShow');
$router->get('/Profil/Photo', 'Photo#SqlAllCUD');
$router->get('/Photo/AddPhoto', "Photo#AddPhoto");
$router->post('/Photo/AddPhoto', "Photo#AddPhoto");
$router->get('/Photo/UpdatePhoto/:id', "Photo#UpdatePhoto#id");
$router->post('/Photo/UpdatePhoto/:id', "Photo#UpdatePhoto#id");
$router->get('/Photo/DeletePhoto/:id', "Photo#DeletePhoto#id");
$router->get('/Profil/Search', 'User#motorSearch');
$router->get('/Profil/Search/Resultat', 'User#Search');

$router->get('/AdminUser', "User#ListAllUser");
$router->get('/erreur/', "User#Erreur");

$router->get('/user/utilisateur','User#utilisateur');

$router->get('/Article/CategorieArticle','User#CategorieArticle');
$router->get('/Article/GestionArticle','User#GestionArticle');


echo $router->run();



