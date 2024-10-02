<?php

namespace App\structural\bridge;

class HelloWorldText extends TextService
{

    public function print(): string
    {
        return $this->formatter->format('Hello World!');
    }
}