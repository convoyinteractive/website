<?php

namespace App\Providers;

use App\Repositories\Storage;
use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->configure('assets');
    }

    public function boot()
    {
        $this->app->singleton(Storage::class, function () {
            return new Storage('storage.convoyinteractive.com', env('APP_KEY'));
        });
    }
}
