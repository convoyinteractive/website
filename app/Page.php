<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Support\HtmlString;

class Page extends Data
{
    protected $filename;

    protected $likeableTypes = [
        'case',
    ];

    public function __construct(array $data, $filename)
    {
        parent::__construct($data);
        $this->filename = $filename;
    }

    public function filename()
    {
        return $this->filename;
    }

    public function date()
    {
        if (preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $this->filename, $matches)) {
            return Carbon::parse($matches[0]);
        }
    }

    public function template()
    {
        return view()->exists($this->get('type'))
            ? $this->get('type')
            : 'default';
    }

    public function isType($type)
    {
        return $this->get('type', 'default') === $type;
    }

    public function hero()
    {
        return tap(
            $this->toComponent($this->get('meta.hero')),
            fn ($hero) => $hero->context("{$this->template()}.hero")
        );
    }

    public function theme()
    {
        return new Theme($this->get('theme'));
    }

    public function isLikeable()
    {
        return in_array($this->get('type', 'default'), $this->likeableTypes);
    }

    public function attributes($key)
    {
        $context = $this->get('type', 'default');
        return new HtmlString(new AttributesRefactor("{$context}.{$key}"));
    }
}
