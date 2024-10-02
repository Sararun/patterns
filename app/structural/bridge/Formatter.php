<?php

namespace App\structural\bridge;

interface Formatter
{
    public function format(string $text): string;
}