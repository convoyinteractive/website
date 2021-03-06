<?php

use Laravel\Lumen\Application;
use App\Markdown\Markdown;
use Laravel\Lumen\Bootstrap\LoadEnvironmentVariables;

require_once __DIR__.'/../vendor/autoload.php';

(
    new LoadEnvironmentVariables(dirname(__DIR__))
)->bootstrap();

$app = new Application(dirname(__DIR__));

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
    $parsedown = new Markdown;
    $parsedown->setBreaksEnabled(true);
    return $parsedown;
});

// Register Service Providers.

$app->register(\App\Http\RouteServiceProvider::class);
$app->register(\App\Providers\MailchimpServiceProvider::class);
$app->register(\App\Providers\PreviewServiceProvider::class);
$app->register(\App\Providers\StorageServiceProvider::class);
$app->register(\App\Providers\ViewServiceProvider::class);
$app->register(\HTMLMin\HTMLMin\HTMLMinServiceProvider::class);

return $app;
