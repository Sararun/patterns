<?php

namespace App\behavioral\state;

interface State
{
    public function handle(): void;
}