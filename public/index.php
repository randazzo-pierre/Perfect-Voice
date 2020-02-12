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
$router->get('/', "User#test");
$router->post('/', 'User#loginCheck');
$router->get('/Article', "Article#ListAll");
$router->get('/Article/Update/:id', "Article#Update#id");
$router->post('/Article/Update/:id', "Article#Update#id");
$router->get('/Article/Add', "Article#Add");
$router->post('/Article/Add', "Article#Add");
$router->get('/Article/Delete/:id', "Article#Delete#id");
$router->get('/Article/Fixtures', "Article#Fixtures");
$router->get('/Article/Write', "Article#Write");
$router->get('/Article/Read', "Article#Read");
$router->get('/Article/WriteOne/:id', "Article#Read#id");
$router->get('/Api/Article', "Api#ArticleGet");
$router->post('/Api/Article', "Api#ArticlePost");
$router->put('/Api/Article/:id/:json', "Api#ArticlePut#id#json");
$router->get('/Article/ListAll','Article#listAll');
$router->get('/coucou/di/:param1/:param2','Article#test#param1#param2');
$router->get('/Contact', 'Contact#showForm');
$router->post('/Contact/sendMail', 'Contact#sendMail');
//$router->get('/Login', 'User#loginForm');
//$router->post('/Login', 'User#loginCheck');
$router->get('/Logout', 'User#logout');
$router->get('/Api/Article/Last','Api#ArticleGetLast');
$router->get('/Register', 'User#registerCheck');
$router->get('/Register', 'User#registerForm');
$router->post('/Register', 'User#registerCheck');
$router->get('/Admin', "Article#ListAllAdmin");
$router->get('/AdminUser', "User#ListAllUser");
$router->get('/Article/Search', 'Article#Search');
$router->get('/Article/Validation', 'Article#ListValidator');
$router->get('/Article/Val/:id', 'Article#Val#id');
$router->get('/Article/Show/:id', "Article#View#id");
$router->post('/Article/Recherche', "Article#Recherche");
$router->get('/erreur/', "User#Erreur");
$router->post('/Article/Show', 'Article#search');
$router->get('/user/utilisateur','User#utilisateur');
$router->get('/Article/Validation','User#Validation');
$router->get('/Article/CategorieArticle','User#CategorieArticle');
$router->get('/Article/GestionArticle','User#GestionArticle');
$router->get('/Article/InscriptionValidation','User#InscriptionValidation');

echo $router->run();



