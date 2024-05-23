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
            include __DIR__ . "/../Views/{$view}.php";
            $content = ob_get_clean();

            require __DIR__ . "/../Views/templates/{$template}.php";
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