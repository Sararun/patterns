<?php

namespace App\structural\composite;

abstract class Unit
{
    abstract public function addUnit(Unit $unit): void;

    abstract public function removeUnit(Unit $unit): void;

    abstract public function bombardStrength(): int;
}
