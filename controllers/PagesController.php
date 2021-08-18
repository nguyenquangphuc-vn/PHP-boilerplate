<?php

namespace app\controllers;

use app\models\User;


class PagesController extends BaseController
{
    private $app_path = 'views/application.php';
    public function __construct()
    {
        $this->folder = 'pages';
    }
    public function home()
    {
        $layoutsController = new LayoutsController();

        $content = $this->render('Home');
        require_once ($this->app_path);
    }
    public function login(){
        $layoutsController = new LayoutsController();

        $content = $this->render('Login');
        require_once ($this->app_path);
    }


    public function error()
    {
        $content = $this->render('Error');
        require_once ($this->app_path);
    }
}