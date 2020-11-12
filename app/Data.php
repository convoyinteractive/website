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
        'image' => Components\AssetComponent::class,
        'video' => Components\AssetComponent::class,
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

    public function components($key = 'body', $type = null)
    {
        return $this->transform($this->get($key), $type ?? $this->get('type'));
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

    public function hasChildren(Components\Component $component)
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
