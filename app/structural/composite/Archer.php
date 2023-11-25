<?php

namespace App\structural\composite;

class Archer extends Unit
{
    public function addUnit(Unit $unit): void
    {
        throw new UnitException('Archer can not add units');
    }

    public function removeUnit(Unit $unit): void
    {
        throw new UnitException('Archer can not remove units');
    }

    public function bombardStrength(): int
    {
        return 1;
    }
}