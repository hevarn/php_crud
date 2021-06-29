<?php
use Router\Router;
require '../vendor/autoload.php';
define('VIEWS',dirname(__DIR__).DIRECTORY_SEPARATOR .'views' . DIRECTORY_SEPARATOR);
define('ASSETS',dirname(__DIR__).DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/','App\Controller\BlogController@homePage');
$router->get('/posts','App\Controller\BlogController@indexArticle');
$router->get('/posts/:id','App\Controller\BlogController@showArticle');

$router->run();
