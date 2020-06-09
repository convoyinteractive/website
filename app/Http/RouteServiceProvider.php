<?php

namespace App\Http;

use App\Http\Middleware\Turbolinks;
use App\Http\Middleware\LoadGlobals;
use App\Http\Middleware\UpdateLocale;
use App\Http\Middleware\CacheResponse;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\SubscriptionsController;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->routeMiddleware([
            'cache' => CacheResponse::class,
            'locale' => UpdateLocale::class,
            'globals' => LoadGlobals::class,
            'turbolinks' => Turbolinks::class,
        ]);
    }

    public function boot()
    {
        $this->mapApiRoutes([
            'prefix' => 'api'
        ]);

        $this->mapWebRoutes([
            'middleware' => ['cache', 'locale', 'globals']
        ]);

        $this->app->router->addRoute('GET', '/', LocaleController::class);
    }

    protected function mapApiRoutes($options)
    {
        $this->app->router->group($options, function ($router) {
            $router->addRoute('GET', 'components/{resource}', ComponentsController::class);
            $router->addRoute('GET', 'collections/{resource}', CollectionsController::class);
            $router->addRoute('POST', 'subscriptions', SubscriptionsController::class . '@store');
            $router->addRoute('DELETE', 'subscriptions/{email}', SubscriptionsController::class . '@destroy');
        });
    }

    protected function mapWebRoutes($options)
    {
        $this->app->router->group($options, function ($router) {
            $router->addRoute('GET', 'newsletter/{email}', SubscriptionsController::class . '@confirm');
            $router->addRoute('GET', '{locale}/newsletter/{name}', NewsletterController::class);
            $router->addRoute('GET', '{locale}[/{page:.*}]', PageController::class);
        });
    }
}
