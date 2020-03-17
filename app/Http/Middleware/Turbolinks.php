<?php

namespace App\Http\Middleware;

use Closure;

class Turbolinks
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Set the turbolinks location header, to follow redirects.
        // @see https://github.com/turbolinks/turbolinks#following-redirects
        $response->header('Turbolinks-Location', $request->url());

        return $response;
    }
}
