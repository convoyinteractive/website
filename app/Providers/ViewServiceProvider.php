<?php

namespace App\Providers;

use App\Http\View\Composers\NavigationComposer;
use App\Http\View\Composers\SocialsComposer;
use App\Repositories\Component;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configure('components');
    }

    public function boot()
    {
        $this->app['view']->composer('layouts.partials.navigation', NavigationComposer::class);
        $this->app['view']->composer('layouts.partials.socials', SocialsComposer::class);
    }
}
