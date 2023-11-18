<?php

namespace App\creation\prototype\baseClasses;

abstract class Plains
{

    public function __construct(
        protected int $coordinates,
        protected int $square
    )
    {
        if ($this->square < 1) {
            throw new \Exception('Square must be greater than 0');
        }
    }

    public function getCoordinates(): int
    {
        return $this->coordinates;
    }

    public function setCoordinates(int $coordinates): self
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    public function getSquare(): int
    {
        return $this->square;
    }

    public function setSquare(int $square): self
    {
        $this->square = $square;
        return $this;
    }
}