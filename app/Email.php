<?php

namespace App;

use Illuminate\Contracts\Support\Arrayable;

class Email extends Data implements Arrayable
{
    public function template()
    {
        $template = "emails.{$this->get('type')}";

        return view()->exists($template) ? $template : 'emails.default';
    }

    public function html()
    {
        return view($this->template(), ['content' => $this])
            ->render();
    }

    public function toArray()
    {
        return [
            'id' => $this->get('id'),
            'title' => $this->get('meta.title'),
            'send' => $this->get('send'),
        ];
    }
}
