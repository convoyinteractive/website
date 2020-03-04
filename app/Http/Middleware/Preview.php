<?php

namespace App\Http\Middleware;

use Closure;

class Preview
{
    public function handle($request, Closure $next)
    {
        if (
            ! $request->preview
            || $this->isProduction()
        ) {
            return $next($request);
        }

        $root = storage_path('content');
        $branch = $request->preview;
        exec("cd {$root} && git pull && git checkout {$branch}");

        return $next($request);
    }

    protected function isProduction()
    {
        return app('env') === 'production';
    }
}
