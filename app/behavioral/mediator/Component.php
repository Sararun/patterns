<?php

namespace App\behavioral\mediator;

abstract class Component
{
    public function __construct(protected ?Mediator $mediator = null)
    {
    }

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}