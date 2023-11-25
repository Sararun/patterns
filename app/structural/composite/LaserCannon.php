<?php

namespace App\structural\composite;

use App\structural\composite\Unit;

class LaserCannon extends Unit
{
    public function addUnit(Unit $unit): void
    {
        throw new UnitException('LaserCannon can not add units');
    }

    public function removeUnit(Unit $unit): void
    {
        throw new UnitException('LaserCannon can not remove units');
    }

    public function bombardStrength(): int
    {
        return 0;
    }
}