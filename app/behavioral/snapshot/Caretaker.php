<?php

namespace App\behavioral\snapshot;

class Caretaker
{
    /**
     * @var Snapshot[]
     */
    private array $mementoList = [];

    public function add(Snapshot $state) {
        $this->mementoList[] = $state;
    }

    public function get($index) {
        return $this->mementoList[$index];
    }
}