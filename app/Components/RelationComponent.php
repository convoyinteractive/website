<?php

namespace App\Components;

use App\Data;
use Exception;
use Illuminate\Support\Arr;
use App\Repositories\Component as ComponentRepository;
use App\Repositories\Collection as CollectionRepository;

class RelationComponent extends Component
{
    protected $relation;

    protected $availableRelationTypes = [
        'component' => ComponentRepository::class,
        'collection' => CollectionRepository::class,
    ];

    public function type()
    {
        return 'relation';
    }

    public function relation()
    {
        return $this->relation;
    }

    public function alias()
    {
        return Arr::get($this->data, 'alias', $this->get('resource'));
    }

    public function getRelationType()
    {
        return $this->data['type'];
    }

    public function fetchRelation()
    {
        $this->validate();

        $this->relation = $this->repository()->find($this->get('resource'));
    }

    public function view()
    {
        if ($this->viewExists($this->alias())) {
            return "components.{$this->alias()}";
        }

        if ($this->viewExists($this->relation->get('type'))) {
            return "components.{$this->relation->get('type')}";
        }

        if ($this->viewExists($this->get('resource'))) {
            return "components.{$this->get('resource')}";
        }

        return "components.error";
    }

    public function get($key = null, $default = null)
    {
        return $this->fromRelation($key) ?? Arr::get($this->data, $key, $default);
    }

    public function __call($method, $arguments)
    {
        return $this->relation->$method(...$arguments);
    }

    protected function fromRelation($key)
    {
        if (! $this->relation()) {
            return null;
        }

        $value = Arr::get($this->relation->toArray(), $key);

        if (! is_array($value)) {
            return $value;
        }

        if (Arr::isAssoc($value)) {
            return $this->relation->component($key, "{$this->context}.{$key}");
        }

        return  $this->relation->collection($key, "{$this->context}.{$key}");
    }

    protected function repository()
    {
        return new $this->availableRelationTypes[$this->getRelationType()];
    }

    protected function validate()
    {
        if (! array_key_exists($this->getRelationType(), $this->availableRelationTypes)) {
            throw new Exception(
                sprintf('Could not transform the related data to a "%s".', $this->getRelationType())
            );
        }
        return $this;
    }
}
