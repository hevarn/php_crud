<?php
use Router\Router;
use Exceptions\ExceptionForPageNotFound;
require '../vendor/autoload.php';
define('VIEWS',dirname(__DIR__).DIRECTORY_SEPARATOR .'views' . DIRECTORY_SEPARATOR);
define('ASSETS',dirname(__DIR__).DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);
define('db_name','projetZero');
define('db_host','localhost');
define('db_user','root');
define('db_pwd','root');


$router = new Router($_GET['url']);

$router->get('/','App\Controller\BlogController@homePage');
$router->get('/posts','App\Controller\BlogController@indexArticle');
$router->get('/posts/:id','App\Controller\BlogController@showArticle');
$router->get('/tags/:id','App\Controller\BlogController@tag');

$router->get('/admin/panel', 'App\Controller\Admin\AdminController@index');

try{
    $router->run();
}catch(ExceptionForPageNotFound $e){
    return $e->error404();
}
