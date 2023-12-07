<?php

namespace App\structural\decorator;

abstract class TileDecorator extends Tile
{
    public function __construct(protected Tile $tile)
    {
    }
}