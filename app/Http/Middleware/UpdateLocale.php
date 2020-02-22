<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UpdateLocale
{
    protected $availableLocales = [
        'de', 'en'
    ];

    public function handle($request, Closure $next)
    {
        $locale = $this->locale($request);

        if (! in_array($locale, $this->availableLocales)) {
            throw new NotFoundHttpException;
        }

        config(['app.locale' => $locale]);

        return $next($request);
    }

    public function locale($request, $default = 'en')
    {
        return Arr::get($request->route()[2], 'locale', $default);
    }
}
