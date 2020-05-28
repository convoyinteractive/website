<?php

namespace App;

class Email extends Data
{
    public function template()
    {
        $template = "emails.{$this->get('type')}";

        return view()->exists($template) ? $template : 'emails.default';
    }
}
