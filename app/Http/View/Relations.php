<?php

namespace App\Http\View;

class Relations
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function has($type)
    {
        return !! count($this->filter($type));
    }

    public function first($type)
    {
        return $this->data->first(fn ($component) => $component->alias() === $type);
    }

    public function filter($type)
    {
        return $this->data->filter(fn ($component) => $component->alias() === $type);
    }
}
