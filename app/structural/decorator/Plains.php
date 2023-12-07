<?php

namespace App\structural\decorator;

class Plains extends Tile
{
    private int $weatherFactor = 2;

    public function getWealthFactor(): int
    {
        return $this->weatherFactor;
    }
}