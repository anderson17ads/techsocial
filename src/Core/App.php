<?php

namespace App\core;

use App\Routes\Admin;
use PlugRoute\PlugRoute;

/**
 * This class is responsible for starting the application
 * Initializes the router
 */
class App
{
    public function __construct()
    {
        $this->router();
    }

    private function router(): void
    {
        $router = new PlugRoute();

        $router->prefix('/admin')
            ->group([Admin::class, 'load']);

        $router->run();
    }
}