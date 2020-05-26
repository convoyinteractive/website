<?php

namespace App\Http;

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
            'cache' => CacheResponse::class,
            'locale' => UpdateLocale::class,
            'globals' => LoadGlobals::class,
        ]);
    }

    public function boot()
    {
        $this->mapWebRoutes([
            'middleware' => ['cache', 'locale', 'globals']
        ]);

        $this->app->router->addRoute('GET', '/', LocaleController::class);
    }

    protected function mapWebRoutes($options)
    {
        $this->app->router->group($options, function ($router) {
            $router->addRoute('GET', '{locale}[/{page:.*}]', PageController::class);
        });
    }
}
