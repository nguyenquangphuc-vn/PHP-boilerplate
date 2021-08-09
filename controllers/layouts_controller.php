<?php
# components_controller
require_once('controllers/base_controller.php');
class LayoutsController extends BaseController
{

    public function __construct()
    {
        $this->folder = 'layouts';
    }

}