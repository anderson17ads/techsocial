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
        $router->prefix('/users')
            ->group(function ($route) {
                $route->get('')->controller(UserController::class, 'index');
                $route->get('/add')->controller(UserController::class, 'add');
                $route->get('/edit/{id}')
                    ->controller(UserController::class, 'edit')
                    ->rule('id', '\d+');
            });
    }
}   