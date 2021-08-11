<?php

use app\controllers\PagesController;

$controllers = array(
    'pages' => ['home', 'error']
);


if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}


$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
if(strcmp($klass, "PagesController") == 0){

    $controller = new PagesController();
}
$controller->$action();