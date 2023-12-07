<?php

namespace App\structural\decorator;

class PollutionDecorator extends TileDecorator
{

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}