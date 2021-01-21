<?php

namespace App\Http\View\Composers;

use App\Repositories\Component;
use Illuminate\View\View;

class ContactComposer
{
    protected $components;

    public function __construct(Component $components)
    {
        $this->components = $components;
    }

    public function compose(View $view)
    {
        return $view->with('contact', $this->components->find('contact'));
    }
}
