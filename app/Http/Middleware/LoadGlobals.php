<?php

namespace App\Http\Middleware;

use Closure;
use App\Files\Content;

class LoadGlobals
{
    public function handle($request, Closure $next)
    {
        app('view')->composer('partials.navigation', function ($view) {
            $content = new Content(
                $this->files('content/globals/'. app('translator')->getLocale(). '/navigation.yml')
            );

            $view->with('navigation', $content->components());
        });

        return $next($request);
    }

    protected function files($path)
    {
        return app('files')->get(storage_path($path));
    }
}
