<?php

namespace CLI;

class ReadTagTypes
{
    public static function readFromConsole (): array
    {
        $typesList = readline(prompt: "Enter needed tag types to parse (example: text, list): ");
        return explode(separator: ',', string: str_replace(search: ' ', replace: '', subject: $typesList));
    }
}