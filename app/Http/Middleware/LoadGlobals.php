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
        app('view')->composer('partials.navigation', function ($view) {
            $view->with('navigation', [
                'about' => $this->content('about')->components(),
                'cases' => $this->content('cases')->components(),
            ]);
        });

        return $next($request);
    }

    protected function content($file)
    {
        return $this->component->fetch(app('translator')->getLocale(). '/' .$file);
    }
}
