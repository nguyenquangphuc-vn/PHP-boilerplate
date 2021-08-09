<?php
# controllers/base_controller.php
class BaseController
{
    protected $folder;

    public function render($file, $GUI_data = array(), $model_data = array())
    {
        $view_file = 'views/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            #extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            return $content;
        }
        else {

            header('Location: index.php?controller=pages&action=error');
            return NULL;
        }
    }
}