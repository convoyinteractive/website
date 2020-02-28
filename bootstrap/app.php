<?php

require_once __DIR__.'/../vendor/autoload.php';

$env = new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(dirname(__DIR__));
$env->bootstrap();

$app = new App\Container(dirname(__DIR__));

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

// Register Service Providers.

$app->register(\App\Http\RouteServiceProvider::class);

return $app;
