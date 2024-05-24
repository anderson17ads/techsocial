<?php

namespace App\Routes;

use App\Controller\Api\UserController;
use PlugRoute\PlugRoute;

/**
 * This class is used to load api routes
 */
class Api
{
    /**
     * Load api routes
     * 
     * @param PlugRoute $router
     * @return void
     */
    public static function load(PlugRoute $router): void
    {
        $router->prefix('/users')
            ->group(function ($route) {
                $route->get('')->controller(UserController::class, 'index');
                $route->post('/add')->controller(UserController::class, 'add');
                $route->put('/edit/{id}')
                    ->controller(UserController::class, 'edit')
                    ->rule('id', '\d+');
                $route->delete('/delete/{id}')->controller(UserController::class, 'delete')
                    ->rule('id', '\d+');
            });
    }
}   