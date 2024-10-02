<?php

namespace App\structural\flyweight;

class ShapeFactory
{
    private array $shapes = [];

    public function getShape(string $color): ShapeFlyweight {
        if (!isset($this->shapes[$color])) {
            $this->shapes[$color] = new ShapeFlyweight($color);
        }

        return $this->shapes[$color];
    }
}