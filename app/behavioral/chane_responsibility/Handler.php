<?php

namespace App\behavioral\chane_responsibility;

abstract class Handler
{
    protected ?Handler $nextHandler = null;

    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    abstract public function handleRequest(string $request);
}