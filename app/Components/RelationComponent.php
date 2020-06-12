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

    public function __construct($data)
    {
        parent::__construct($data);

        $this->validate()
            ->fetchRelation();
    }

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

    protected function fetchRelation()
    {
        $repo = new $this->availableRelationTypes[$this->getRelationType()];
        $resource = $repo->fetch($this->get('resource', null));

        $this->data['meta'] = $resource->get('meta', null);
        $this->data['items'] = $resource->components();
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
