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

    protected function fetchRelation()
    {
        $repo = new $this->availableRelationTypes[$this->data['as']];
        $instance = $repo->fetch($this->get('resource', null));

        $this->data['meta'] = $instance->get('meta', null);
        $this->data['items'] = $instance->components();
    }

    protected function validate()
    {
        if (! array_key_exists($this->data['as'], $this->availableRelationTypes)) {
            throw new Exception(
                sprintf('Could not transform the related data to a "%s".', $this->data['as'])
            );
        }
        return $this;
    }
}
