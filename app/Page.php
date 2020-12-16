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

    protected $hasNewsletterTypes = [
        'article',
    ];

    public function __construct(array $data, $filename)
    {
        parent::__construct($data);
        $this->filename = $filename;
    }

    public function attributes($key)
    {
        $context = $this->get('type', 'default');
        return new HtmlString(new Attributes("{$context}.{$key}"));
    }

    public function date()
    {
        if (preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $this->filename, $matches)) {
            return Carbon::parse($matches[0]);
        }
    }

    public function sections()
    {
        return new Sections($this);
    }

    public function theme()
    {
        return new Theme($this->get('theme'));
    }

    public function template()
    {
        return view()->exists($this->get('type'))
            ? $this->get('type')
            : 'default';
    }

    public function type()
    {
        return $this->get('type', 'default');
    }

    public function isType($type)
    {
        return $this->type() === $type;
    }

    public function isLikeable()
    {
        return in_array($this->get('type', 'default'), $this->likeableTypes);
    }

    public function hasNewsletter()
    {
        return in_array($this->get('type', 'default'), $this->hasNewsletterTypes);
    }
}
