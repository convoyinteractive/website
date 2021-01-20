<?php

namespace App;

use App\Http\View\Theme;
use App\Http\View\Attributes;
use App\Http\View\Relations;
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
        $context = $this->context;
        return new HtmlString(new Attributes("{$context}.{$key}"));
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

    public function theme()
    {
        return new Theme($this->get('theme'));
    }

    public function type()
    {
        return $this->get('type', 'default');
    }

    public function path()
    {
        $locale = app('translator')->getLocale();
        $path = preg_replace('/[0-9]{4}-[0-9]{2}-[0-9]{2}\./', '', $this->filename);
        $path = str_replace('.yml', '', $path);
        $path = trim($path, '/');

        return "/{$locale}/{$path}";
    }

    public function aside()
    {
        return $this->collection('aside', "{$this->context}.aside");
    }

    public function body()
    {
        return $this->collection('body', $this->context);
    }

    public function excerpt()
    {
        return $this->collection('excerpt', "{$this->context}.excerpt");
    }

    public function hero()
    {
        return $this->component('hero', "{$this->context}.hero");
    }

    public function relations()
    {
        return new Relations(
            $this->collection('relations', "{$this->context}.relations")
        );
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
