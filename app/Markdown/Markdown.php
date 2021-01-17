<?php

namespace App\Markdown;

use ParsedownExtra;
use Illuminate\Support\Str;

class Markdown extends ParsedownExtra
{
    protected function inlineLink($excerpt)
    {
        $link = parent::inlineLink($excerpt);

        if (! $link) {
            return null;
        }

        if ($this->isCTA($link)) {
            $link['element']['text'] = "<span>{$link['element']['text']}</span>";
            $link['element']['attributes']['v-button'] = "true";
        }

        if ($this->isExternalLink($link)) {
            $link['element']['attributes']['target'] = '_blank';
            $link['element']['attributes']['rel'] = 'noopener';
        }

        return $link;
    }

    public function isCTA($link)
    {
        if (! isset($link['element']['attributes']['class'])) {
            return false;
        }

        return Str::contains($link['element']['attributes']['class'], 'cta');
    }

    public function isExternalLink($link)
    {
        $href = $link['element']['attributes']['href'];

        return Str::startsWith($href, '//')
            || Str::startsWith($href, 'http://')
            || Str::startsWith($href, 'https://');
    }
}
