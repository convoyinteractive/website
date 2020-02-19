<?php

namespace App\Files;

use Illuminate\Support\Arr;
use Symfony\Component\Yaml\Yaml;
use App\Components\DataComponent;
use Illuminate\Support\Collection;
use App\Components\LayoutComponent;

class Content
{
    protected $data;

    public function __construct($raw)
    {
        $this->data = $this->parse($raw);
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function sections()
    {
        return $this->transform(
            $this->get('body')
        );
    }

    protected function transform($items)
    {
        return Collection::make($items)->map(function ($item) {
            if (Arr::has($item, 'data')) {
                return new DataComponent($item['type'], $item['data']);
            }

            if (Arr::has($item, 'items')) {
                return new LayoutComponent($item['type'], $this->transform($item['items']));
            }
        });
    }

    protected function parse($raw)
    {
        return app(Yaml::class)->parse($raw);
    }
}
