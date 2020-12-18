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
                'about' => $this->component->find('about')->collection('items', 'navigation'),
                'cases' => $this->component->find('cases')->collection('items', 'navigation'),
                'contact' => $this->component->find('contact')->collection('items', 'navigation'),
            ]);
        });

        app('view')->composer('layouts.partials.socials', function ($view) {
            $view->with('socials', $this->component->find('socials')->collection('items'));
        });

        return $next($request);
    }
}
