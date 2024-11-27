<?php

namespace App\behavioral\state;

class Document
{
    private State $currentState;

    public function setState(State $state): self
    {
        $this->currentState = $state;
        return $this;
    }

    public function handle(): void
    {
        $this->currentState->handle();
    }
}