<?php

namespace App\Pagination;

use Illuminate\Support\Collection;

class Pagination
{
    protected $items;

    protected $availableMethods = [
        'date' => DatePagination::class
    ];

    public static function make($items)
    {
        return new static($items);
    }

    public function __construct(Collection $items)
    {
        $this->items = $items;
    }

    public function by($method)
    {
        return new $this->availableMethods[$method]($this->items);
    }
}
