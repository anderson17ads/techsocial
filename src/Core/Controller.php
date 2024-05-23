<?php
namespace App\Core;

class Controller
{
    /**
     * Instantiate the model
     * 
     * @param string $model
     * 
     * @return object
     */
    public function model($model = null)
    {
        if (!is_null($model)) {
            require __DIR__ . "/../models/{$model}.php";
            
            $class = "App\models\\{$model}";
            
            return new $class();
        }
    }

     /**
     * Instantiate the view
     * 
     * @param string $view
     * @param array $data
     * 
     * @return void
     */
    public function view($view = null, $data = [], $template = 'default')
    {
        if (!is_null($view)) {                        
            
            ob_start();
            include __DIR__ . "/../views/{$view}.php";
            $content = ob_get_clean();

            require __DIR__ . "/../views/templates/{$template}.php";
        }
    }    

    /**
     * Returns if the method or class is not found
     * 
     * @return void
     */
    public function notFound()
    {
        $this->view('errors/error404');
    }

    /**
     * Returns true if request method is post
     * 
     * @return bool
     */
    public function isPost()
    {
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            return true;
        }

        return false;
    }

    /**
     * Returns true if request method is put
     * 
     * @return bool
     */
    public function isPut()
    {        
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            return (isset($_POST['_METHOD']) == 'PUT') ? true : false;
        }

        return false;
    }

    /**
     * Returns true if request method is delete
     * 
     * @return bool
     */
    public function isDelete()
    {        
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            return (isset($_POST['_METHOD']) == 'DELETE') ? true : false;
        }

        return false;
    }

    /**
     * Return params
     * 
     * @return string
     */
    public function params()
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        return (isset($request[3])) ? $request[3] : null;
    }

    /**
     * Return id of params
     * 
     * @return string
     */
    public function getParamsId()
    {
        $params = $this->params();

        if (!is_null($params)) {
            return explode('?', $params)[0];            
        }
    }

    /**
     * Verify Login
     * 
     * @param string $type
     * @return void
     */
    public function verifyLogin(string $type = 'admin'): void
    {
        if (!isset($_SESSION[$type]['user'])) {
            header("Location: /auth/login");
            exit(0);
        }
    }
}