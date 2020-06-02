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
                'about' => $this->content('sitemap')->components(),
                'cases' => $this->content('cases')->components(),
                'contact' => $this->content('contact')->components(),
            ]);
        });

        return $next($request);
    }

    protected function content($file)
    {
        return $this->component->fetch(app('translator')->getLocale(). '/' .$file);
    }
}
