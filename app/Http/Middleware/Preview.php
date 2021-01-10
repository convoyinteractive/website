<?php

namespace App\Http\Middleware;

use Closure;

class Preview
{
    public function handle($request, Closure $next)
    {
        if (
            ! $request->preview
            || app()->environment('production')
        ) {
            return $next($request);
        }

        $root = storage_path('content');
        $branch = $request->preview;
        exec("cd {$root} && git pull && git checkout {$branch}");

        return $next($request);
    }
}
