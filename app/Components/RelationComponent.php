<?php

namespace App\Components;

use Exception;
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

    public function getRelationType()
    {
        return $this->data['type'];
    }

    public function fetchRelation()
    {
        $this->validate();

        $repo = new $this->availableRelationTypes[$this->getRelationType()];
        $resource = $repo->localize($this->get('resource'));

        $this->data['meta'] = $resource->get('meta');
        $this->data['items'] = $resource->components('body', "{$this->context}.items");
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
