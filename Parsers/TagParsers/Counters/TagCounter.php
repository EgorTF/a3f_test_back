<?php

namespace Parsers\TagParsers\Counters;

class TagCounter
{
    private array $countList;

    public function count(array $tags, string $html): array
    {
        foreach ($tags as $tag) {
            $this->countList[$tag] = substr_count(haystack: $html, needle: $tag);
        }

        return $this->countList;
    }
}