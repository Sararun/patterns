<?php

namespace App\structural\flyweight;

class ShapeFlyweight
{
    private string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function draw(int $x, int $y): void {
        echo "Drawing shape with color $this->color at position ($x, $y)\n";
    }
}