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
                'about' => $this->component->localize('about')->collection('body'),
                'cases' => $this->component->localize('cases')->collection('body'),
                'contact' => $this->component->localize('contact')->collection('body'),
            ]);
        });

        app('view')->composer('layouts.partials.socials', function ($view) {
            $view->with('socials', $this->component->localize('socials')->collection('body'));
        });

        return $next($request);
    }
}
