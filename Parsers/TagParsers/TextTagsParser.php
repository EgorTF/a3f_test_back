<?php
namespace Parsers\TagParsers;

use Parsers\TagParsers\Counters\TagCounter;
use Parsers\TagParsers\Interfaces\TagParsersInterface;

class TextTagsParser implements TagParsersInterface
{
    public function parse($html): array
    {
        return (new TagCounter())->count(tags: [
            '<p>',
            '<h1>',
            '<h2>',
            '<h3>',
            '<h4>',
            '<h5>',
            '<h6>',
            '<strong>',
            '<em>',
            '<abbr>',
            '<acronym>',
            '<address>',
            '<bdo>',
            '<blockquote>',
            '<cite>',
            '<q>',
            '<code>',
            '<ins>',
            '<del>',
            '<dfn>',
            '<kbd>',
            '<pre>',
            '<samp>',
            '<var>'
        ], html: $html);
    }
}