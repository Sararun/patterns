<?php

namespace App\structural\bridge;

abstract class TextService
{
    public function __construct(protected Formatter $formatter)
    {
    }

    abstract public function print(): string;
}