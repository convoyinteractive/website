<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\Component;

class LoadGlobals
{
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }
    public function handle($request, Closure $next)
    {
        app('view')->composer('layouts.partials.navigation', function ($view) {
            $view->with('navigation', [
                'about' => $this->component->fetch('about')->components(),
                'cases' => $this->component->fetch('cases')->components(),
                'contact' => $this->component->fetch('contact')->components(),
            ]);
        });

        return $next($request);
    }
}
