<?php
namespace Parsers\TagParsers\Factories;

use Exception;
use Parsers\TagParsers\ListTagsParser;
use Parsers\TagParsers\TextTagsParser;

final class TagParsersFactory
{
    /**
     * @throws Exception
     */
    public static function getParser(string $type): TextTagsParser|ListTagsParser
    {
        return match($type) {
            'text' => new TextTagsParser(),
            'list' => new ListTagsParser(),
            default => throw new Exception(message: 'Unknown type given'),
        };
    }
}