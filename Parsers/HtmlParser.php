<?php
namespace Parsers;

use Exception;

use Parsers\TagParsers\Factories\TagParsersFactory;
use Parsers\TagParsers\Services\TagParserService;

class HtmlParser
{
    private array $parsers;
    private array $count;
    private string $htmlSource;

    public function __construct(array $parsers, string $htmlSource)
    {
        $this->parsers = $parsers;
        $this->htmlSource = $htmlSource;
    }

    public function handle(): array
    {
        foreach ($this->parsers as $type) {
            try {
                $parser = TagParsersFactory::getParser($type);
                $this->count[$type] = (new TagParserService($parser, $this->htmlSource))->parse();
            } catch (Exception) {
                echo "Error: entered not correct type $type" . PHP_EOL;
            }
        }

        return $this->count;
    }
}