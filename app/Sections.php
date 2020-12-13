<?php

namespace App;

class Sections
{
    protected $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function hero()
    {
        return $this->page->component('meta.hero', "{$this->page->template()}.hero");
    }

    public function body()
    {
        return $this->page->collection('body', $this->page->template());
    }
}
