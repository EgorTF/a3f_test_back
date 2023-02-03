<?php

namespace Formatters;

class TagsCounterFormatter
{
    private array $counters;
    private string $output;

    public function __construct(array $counters)
    {
        $this->counters = $counters;
        $this->output = '';
    }

    public function format(): string
    {
        foreach ($this->counters as $counter => $value) {
            $this->output .= urldecode(string: "теги типа $counter: " .
                PHP_EOL .
                str_replace('=', ' = ', http_build_query(data: $value, numeric_prefix: '', arg_separator: PHP_EOL)) .
                PHP_EOL);
        }

        return $this->output;
    }
}