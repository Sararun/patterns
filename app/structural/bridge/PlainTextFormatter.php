<?php

namespace App\structural\bridge;

class PlainTextFormatter implements Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}