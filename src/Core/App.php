<?php

namespace App\core;

use App\Routes\Admin;
use App\Routes\Api;
use PlugRoute\Http\Request;
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

        // Public routes
        $router->prefix('/admin')
            ->group([Admin::class, 'load']);

        // Admin routes
        $router->prefix('/api')
            ->group([Api::class, 'load']);

        // Traitment public files
        $router->fallback()->callback(function (Request $request) {
            $fullUrl = $request->getUrl();
            $baseUrl = '/public';

            if (str_starts_with($fullUrl, $baseUrl)) {
                $path = str_replace($baseUrl, '', $fullUrl);
                $this->public($path);
            }
        });

        $router->run();
    }

    /**
     * Load public files
     * 
     * @param string $path
     * @return void
     */
    private function public(string $path): void
    {
        $path = str_replace('..', '', $path);
        $path = str_replace('//', '/', $path);
        $path = __DIR__ . '../../public/' . $path;

        if (file_exists($path)) {
            require $path;
        }
    }
}