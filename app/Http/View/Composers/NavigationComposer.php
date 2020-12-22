<?php

namespace App\Http\View\Composers;

use App\Repositories\Component;
use Illuminate\View\View;

class NavigationComposer
{
    protected $components;

    public function __construct(Component $components)
    {
        $this->components = $components;
    }

    public function compose(View $view)
    {
        $view->with('navigation', [
            'about' => $this->fetchCollection('about'),
            'cases' => $this->fetchCollection('cases'),
            'contact' => $this->fetchCollection('contact'),
        ]);
    }

    protected function fetchCollection($key)
    {
        return $this->components->find($key)->collection('items', 'navigation');
    }
}
