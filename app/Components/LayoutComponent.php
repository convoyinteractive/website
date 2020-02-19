<?php

namespace App\Components;

class LayoutComponent
{
    protected $type;

    protected $items;

    public function __construct($type, $items)
    {
        $this->type = $type;
        $this->items = $items;
    }

    public function type()
    {
        return $this->type;
    }

    public function items()
    {
        return $this->items;
    }
}
