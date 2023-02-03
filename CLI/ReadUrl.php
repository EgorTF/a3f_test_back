<?php

namespace CLI;

class ReadUrl {
    public static function readFromConsole(): string
    {
        return readline(prompt: "Enter URL: ");
    }
}