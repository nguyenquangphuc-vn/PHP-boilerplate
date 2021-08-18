<?php

use app\controllers\PagesController;
use app\controllers\AuthController;

$controllers = array(
    'pages' => ['home', 'error', 'login'],
    'auth' => ['login', 'logout']
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
if(strcmp($klass, "PagesController") == 0){

    $controller = new PagesController();
    $controller->$action();
}
if(strcmp($klass, "AuthController") == 0){
    AuthController::$action();
}