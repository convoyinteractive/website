<?php

namespace App;

use Throwable;
use App\Components;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use JsonSerializable;

class Data implements JsonSerializable
{
    protected $data;

    protected $components = [
        'markdown' => Components\MarkdownComponent::class,
        'component' => Components\RelationComponent::class,
        'collection' => Components\RelationComponent::class,
        'svg' => Components\SvgComponent::class,
    ];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function has($key)
    {
        return Arr::has($this->data, $key);
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function components($key = 'body')
    {
        return $this->transform(
            $this->get($key)
        );
    }

    public function __get($key)
    {
        return $this->toComponent($this->get($key) ?? []);
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function jsonSerialize()
    {
        return (array) $this->data;
    }

    protected function transform($items)
    {
        return Collection::make($items)->map(function ($item) {
            if ($this->hasAddon($item)) {
                $item['addon'] = $this->toComponent($item['addon']);
            }

            if ($this->isNested($item)) {
                $item['items'] = $this->transform($item['items']);
            }

            return $this->toComponent($item);
        });
    }

    protected function toComponent($item = [])
    {
        try {
            $component = new $this->components[$item['type']]($item);
            return $component;
        } catch (Throwable $e) {
            return new Components\Component($item);
        }
    }

    protected function hasAddon($item)
    {
        return Arr::has($item, 'addon');
    }

    protected function isNested($item)
    {
        return Arr::has($item, 'items') && ! Arr::get($item, 'items') instanceof Collection;
    }
}
