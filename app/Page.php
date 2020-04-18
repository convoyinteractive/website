<?php

namespace App;

class Page extends Data
{
    public function template()
    {
        return $this->get('type');
    }
}
