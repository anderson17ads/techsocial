<?php

namespace App\Routes;

use App\Controller\Admin\UserController;
use PlugRoute\PlugRoute;

/**
 * This class is used to load admin routes
 */
class Admin
{
    /**
     * Load admin routes
     * 
     * @param PlugRoute $router
     * @return void
     */
    public static function load(PlugRoute $router): void
    {
        $router->get('/users')->controller(UserController::class, 'index');
    }
}   