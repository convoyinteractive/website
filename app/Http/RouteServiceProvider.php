<?php

namespace App\Http;

use App\Http\Middleware\Preview;
use App\Http\Middleware\LoadGlobals;
use App\Http\Middleware\UpdateLocale;
use App\Http\Middleware\CacheResponse;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LocaleController;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->routeMiddleware([
            'preview' => Preview::class,
            'cache' => CacheResponse::class,
            'locale' => UpdateLocale::class,
            'globals' => LoadGlobals::class,
        ]);
    }

    public function boot()
    {
        $this->app->router->addRoute('GET', '/', LocaleController::class);

        $this->mapWebRoutes([
            'middleware' => ['preview', 'cache', 'locale', 'globals']
        ]);
    }

    public function mapWebRoutes($options)
    {
        $this->app->router->group($options, function ($router) {
            $router->addRoute('GET', '{locale}[/{page:.*}]', PageController::class);
        });
    }
}
