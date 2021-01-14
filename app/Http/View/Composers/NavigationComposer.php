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
        $cases = $this->components->find('cases')->collection('items', 'navigation');

        return $view->with('cases', $cases)
            ->with('sitemap', $this->components->find('sitemap'))
            ->with('contact', $this->components->find('contact'));
    }
}
