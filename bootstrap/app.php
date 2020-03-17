<?php

use App\Container;
use App\Http\Middleware\Preview;
use App\Http\Middleware\Turbolinks;
use Laravel\Lumen\Bootstrap\LoadEnvironmentVariables;

require_once __DIR__.'/../vendor/autoload.php';

(
    new LoadEnvironmentVariables(dirname(__DIR__))
)->bootstrap();

$app = new Container(dirname(__DIR__));

// Register container bindings.

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton('markdown', function ($app) {
    return new ParsedownExtra;
});

// Register global middlewares.

if ($app->isStage()) {
    $app->middleware(Preview::class);
}

$app->middleware(Turbolinks::class);

// Register Service Providers.

$app->register(\App\Http\RouteServiceProvider::class);

return $app;
