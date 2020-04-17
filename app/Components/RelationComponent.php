<?php

namespace App\Components;

use Exception;
use App\Repositories\Collection;

class RelationComponent extends Component
{
    protected $relation;

    protected $availableRelationTypes = [
        'collection' => Collection::class,
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
        $this->relation = $repo->fetch($this->get('path'));
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
