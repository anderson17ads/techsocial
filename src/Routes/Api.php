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
                $route->get('/getById/{id}')
                    ->controller(UserController::class, 'getById')
                    ->rule('id', '\d+');
                $route->post('/store')->controller(UserController::class, 'store');
                $route->put('/update')->controller(UserController::class, 'update');
                $route->delete('/delete/{id}')->controller(UserController::class, 'delete')
                    ->rule('id', '\d+');
            });
    }
}   