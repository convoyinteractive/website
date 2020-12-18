<?php

namespace App;

class Sections
{
    protected $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function aside()
    {
        return $this->page->collection('aside', "{$this->page->type()}.aside");
    }

    public function excerpt()
    {
        return $this->page->collection('excerpt', "{$this->page->type()}.excerpt");
    }

    public function hero()
    {
        return $this->page->component('hero', "{$this->page->type()}.hero");
    }

    public function body()
    {
        return $this->page->collection('body', $this->page->type());
    }
}
