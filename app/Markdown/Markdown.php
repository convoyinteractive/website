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


        if ($this->isExternalLink($link)) {
            $link['element']['attributes']['target'] = '_blank';
            $link['element']['attributes']['rel'] = 'noopener';
        }

        return $link;
    }

    public function isExternalLink($link)
    {
        $href = $link['element']['attributes']['href'];

        return Str::startsWith($href, '//')
            || Str::startsWith($href, 'http://')
            || Str::startsWith($href, 'https://');
    }
}
