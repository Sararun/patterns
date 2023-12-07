<?php

namespace App\structural\composite;

class Army extends Unit
{
    private array $units = [];

    public function addUnit(Unit $unit): void
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit): void
    {
        $unitId = array_search($unit, $this->units, true);
        if (is_int($unitId)) {
            array_splice($this->units, $unitId, 1);
        }
    }

    public function bombardStrength(): int
    {
        $ret = 0;

        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}
