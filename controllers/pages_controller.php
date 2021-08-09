
<?php
# controllers/pages_controller.php
require_once('controllers/base_controller.php');
require_once ('controllers/layouts_controller.php');

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

        $content = $this->render('home');
        require_once ($this->app_path);
    }


    public function error()
    {
        $content = $this->render('error');
        require_once ($this->app_path);
    }
}