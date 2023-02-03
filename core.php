<?php

use CLI\ReadTagTypes;
use CLI\ReadUrl;
use Formatters\TagsCounterFormatter;
use Parsers\HtmlParser;
use Requests\GetHtmlBodyRequest;


$tagTypes = ReadTagTypes::readFromConsole();
$inputUrl = ReadUrl::readFromConsole();

$htmlSource = (new GetHtmlBodyRequest(url: $inputUrl))->getHtmlBody();
$count = (new HtmlParser(parsers: $tagTypes, htmlSource: $htmlSource))->handle();

$output = (new TagsCounterFormatter(counters: $count))->format();

echo $output;
