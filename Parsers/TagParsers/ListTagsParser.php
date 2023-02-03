<?php

namespace Parsers\TagParsers;

use Parsers\TagParsers\Counters\TagCounter;
use Parsers\TagParsers\Interfaces\TagParsersInterface;

class ListTagsParser implements TagParsersInterface
{
    public function parse(string $html): array
    {
        return (new TagCounter())->count(tags: [
            '<ul>',
            '<ol>',
            '<li>',
            '<dl>',
            '<dt>',
            '<dd>'
        ], html: $html);
    }
}