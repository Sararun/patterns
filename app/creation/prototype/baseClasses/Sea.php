<?php

namespace App\creation\prototype\baseClasses;

abstract class Sea
{
    public function __construct(
        protected string $name,
        protected float $depth
    ) {
        if ($this->depth < 1) {
            throw new \Exception('Depth must be greater than 0');
        }
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDepth(float $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getDepth(): float
    {
        return $this->depth;
    }
}
