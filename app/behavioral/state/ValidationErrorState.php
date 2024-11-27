<?php

namespace App\behavioral\state;

class ValidationErrorState implements State
{


    public function __construct(private readonly Document $document)
    {
    }

    public function handle(): void
    {
        echo 'Validation Error';
    }
}