<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('ASSETS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('db_name', 'projetZero');
define('db_host', 'localhost');
define('db_user', 'root');
define('db_pwd', 'root');
define("F_SIZE", "4M");
define("H_FILE", false);


$router = new Router($_GET['url']);

$router->get('/', 'App\Controller\BlogController@homePage');
$router->get('/posts', 'App\Controller\BlogController@indexArticle');
$router->get('/posts/:id', 'App\Controller\BlogController@showArticle');
$router->get('/tags/:id', 'App\Controller\BlogController@tag');
$router->get('/mycave','App\Controller\BlogController@mycave');

$router->get('/admin/panel', 'App\Controller\Admin\AdminController@index');
$router->get('/admin/panel/create', 'App\Controller\Admin\AdminController@generateTemplateCreate');
$router->post('/admin/panel/valid', 'App\Controller\Admin\AdminController@sendDataForCreate');
$router->post('/admin/panel/delete/:id', 'App\Controller\Admin\AdminController@destroy');
$router->get('/admin/panel/modify/:id', 'App\Controller\Admin\AdminController@generateTemplateForModify');
$router->post('/admin/panel/modify/:id', 'App\Controller\Admin\AdminController@sendDataForUpdate');

$router->get('/admin/connect', 'App\Controller\Users\UserController@connectUser');
$router->post('/admin/connect/create','App\Controller\Users\UserController@CreateUser');

$router->post('/admin/valid', 'App\Controller\Users\UserController@sendDataUserConnect');
$router->get('/admin/logout', 'App\Controller\Users\UserController@destroySession');

$router->get('/cookie', 'App\Controller\BlogController@cookie');


try {
    $router->run();
} catch (\Exception $e) {
    $e->getMessage();
}
