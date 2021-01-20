<?php

namespace App\Pagination;

class DatePagination extends Pagination
{
    protected $current;

    public function __construct($items)
    {
        parent::__construct($items);

        $this->items = $this->items->sortByDesc->date();
    }

    public function current($date = null)
    {
        if ($date) {
            $this->current = $date;
        }

        return $this->current;
    }

    public function next()
    {
        $next = $this->items->filter(
            fn ($item) => $item->date()->greaterThan($this->current)
        )->last();

        return $next ?? $this->items->last();
    }

    public function prev()
    {
        $next = $this->items->filter(
            fn ($item) => $item->date()->lessThan($this->current)
        )->first();

        return $next ?? $this->items->first();
    }
}
