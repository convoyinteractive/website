<?php

namespace App\Providers;

use App\Storage\Storage;
use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
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
