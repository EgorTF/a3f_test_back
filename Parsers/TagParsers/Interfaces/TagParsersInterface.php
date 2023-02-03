<?php

namespace Parsers\TagParsers\Interfaces;

interface TagParsersInterface
{
    public function parse(string $html);
}