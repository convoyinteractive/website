<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PreviewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->environment('stage')) {
            $this->app->middleware(Preview::class);
        }
    }
}
