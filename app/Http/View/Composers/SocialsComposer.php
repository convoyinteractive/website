<?php

namespace App\Http\View\Composers;

use App\Repositories\Component;
use Illuminate\View\View;

class SocialsComposer
{
    protected $components;

    public function __construct(Component $components)
    {
        $this->components = $components;
    }

    public function compose(View $view)
    {
        $view->with('socials', $this->components->find('socials')->collection('items'));
    }
}
