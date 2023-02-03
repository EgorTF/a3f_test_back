<?php

namespace Parsers\TagParsers\Services;

use Parsers\TagParsers\Interfaces\TagParsersInterface;

class TagParserService
{
    private string $html;
    private TagParsersInterface $tagParser;

    public function __construct(TagParsersInterface $tagParser, string $html)
    {
        $this->html = $html;
        $this->tagParser = $tagParser;
    }

    public function parse(): array
    {
        return $this->tagParser->parse(html: $this->html);
    }
}