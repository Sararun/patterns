<?php

namespace App\behavioral\state;

use Throwable;

class PendingState implements State
{

    public function __construct(private readonly Document $document)
    {
    }

    public function handle(): void
    {
        echo 'Pending document';

        try {
            throw new \RuntimeException();
        }catch (Throwable) {
            $validationErrorState = new ValidationErrorState($this->document);
            $this->document->setState($validationErrorState);
            $this->document->handle();
        }
    }
}