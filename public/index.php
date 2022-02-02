<?php
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;
require_once __DIR__ . '/../vendor/autoload.php';
$app = new Application(dirname(__DIR__));

$app->router->get('/',[SiteController::class,'home']);
//$app->router->get('/contact', [new SiteController(), 'сontact']);
$app->router->get('/contact', [SiteController::class, 'сontact']);
$app->router->post('/contact',  [SiteController::class, 'handleContact']);

$app->router->get('/login',[AuthController::class,'login']);
$app->router->post('/login',[AuthController::class,'login']);
$app->router->get('/register',[AuthController::class,'register']);
$app->router->post('/register',[AuthController::class,'register']);

$app->run();
