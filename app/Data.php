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

    protected $context;

    protected $components = [
        'markdown' => Components\MarkdownComponent::class,
        'component' => Components\RelationComponent::class,
        'collection' => Components\RelationComponent::class,
        'svg' => Components\SvgComponent::class,
        'image' => Components\AssetComponent::class,
        'video' => Components\AssetComponent::class,
    ];

    public function __construct(array $data)
    {
        $this->data = $data;

        $this->setContext($this->get('type'));
    }

    public function __get($key)
    {
        return $this->component($key);
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function has($key)
    {
        return Arr::has($this->data, $key);
    }

    public function get($key = null, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function collection($key, $context = null)
    {
        return $this->transform($this->get($key), $context ?? $this->context);
    }

    public function component($key, $context = null)
    {
        $context = $context ?: $this->context;

        return tap(
            $this->toComponent($this->get($key) ?? []),
            fn ($component) => $component->context("{$context}.{$component->alias()}")
        );
    }

    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    public function toArray()
    {
        return (array) $this->data;
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    protected function transform($items, $context)
    {
        return Collection::make($items)->map(function ($item) use ($context) {
            $component = $this->toComponent($item);

            $component->context("{$context}.{$component->alias()}");

            if ($component->has('addon')) {
                $component->addon = tap(
                    $this->toComponent($component->addon),
                    fn ($addon) => $addon->context("{$context}.{$component->alias()}.addon")
                );
            }

            if ($this->hasChildren($component)) {
                $component->items = $this->transform(
                    $component->items,
                    "{$context}.{$component->alias()}.items"
                );
            }

            if ($component->is('relation')) {
                $component->fetchRelation();
            }

            return $component;
        });
    }

    protected function hasChildren(Components\Component $component)
    {
        return $component->has('items') && !$component->items instanceof Collection;
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
}
