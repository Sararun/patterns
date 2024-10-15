<?php

namespace App\behavioral\snapshot;

class Originator
{

    public function __construct(private $state) {
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function saveStateToMemento() {
        return new Snapshot($this->state);
    }

    public function getStateFromMemento(Snapshot $memento) {
        $this->state = $memento->getState();
    }

    public function getState() {
        return $this->state;
    }
}