<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Components\Component;
use App\Repositories\Component as Repository;

class ServicesComposer
{
    protected $components;

    public function __construct(Repository $components, Request $request)
    {
        $this->components = $components;
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $items = $this->components->find('services')->collection('items')->filter(function ($service) {
            return $this->request->path() !== trim($service->get('link'), '/');
        });

        return $view->with('services', new Component([
            'type' => 'services',
            'items' => $items
        ]));
    }
}
