<?php

namespace App\Http;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PageController;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mapWebRoutes([
            //
        ]);
    }

    public function mapWebRoutes($options)
    {
        $this->app->router->group($options, function ($router) {
            $router->addRoute('GET', '[/{page}]', PageController::class);
        });
    }
}
