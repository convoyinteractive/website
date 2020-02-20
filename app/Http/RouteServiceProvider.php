<?php

namespace App\Http;

use App\Http\Middleware\CacheResponse;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PageController;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->routeMiddleware([
            'cache' => CacheResponse::class,
        ]);
    }

    public function boot()
    {
        $this->mapWebRoutes([
            'middleware' => 'cache'
        ]);
    }

    public function mapWebRoutes($options)
    {
        $this->app->router->group($options, function ($router) {
            $router->addRoute('GET', '[/{page}]', PageController::class);
        });
    }
}
