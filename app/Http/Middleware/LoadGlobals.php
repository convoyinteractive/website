<?php

namespace App\Http\Middleware;

use Closure;
use App\Files\Content;

class LoadGlobals
{
    public function handle($request, Closure $next)
    {
        app('view')->composer('partials.navigation', function ($view) {
            $view->with('cases', $this->content('cases.yml')->components());
        });

        return $next($request);
    }

    protected function content($file)
    {
        $data = $this->files(
            sprintf('content/globals/%s/%s', app('translator')->getLocale(), $file)
        );

        return new Content($data);
    }

    protected function files($path)
    {
        return app('files')->get(storage_path($path));
    }
}
