<?php

namespace App\behavioral\snapshot;

class Snapshot
{
    public function __construct(private $state) {
    }

    public function getState() {
        return $this->state;
    }
}