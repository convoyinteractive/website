<?php

namespace App\View;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['view']->composer('partials.navigation', function ($view) {
            $view->with('navigation', []);
        });
    }
}
