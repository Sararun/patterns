<?php

namespace App\structural\bridge;

class HtmlFormatter implements Formatter
{

    public function format(string $text): string
    {
        return "<p>$text</p>";
    }
}