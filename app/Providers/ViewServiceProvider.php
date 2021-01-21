<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\ContactComposer;
use App\Http\View\Composers\SocialsComposer;
use App\Http\View\Composers\ServicesComposer;
use App\Http\View\Composers\NavigationComposer;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configure('components');
    }

    public function boot()
    {
        $this->app['view']->composer('layouts.partials.contact', ContactComposer::class);
        $this->app['view']->composer('layouts.partials.footer', NavigationComposer::class);
        $this->app['view']->composer('layouts.partials.navigation', NavigationComposer::class);
        $this->app['view']->composer('layouts.partials.services', ServicesComposer::class);
        $this->app['view']->composer('layouts.partials.socials', SocialsComposer::class);
    }
}
