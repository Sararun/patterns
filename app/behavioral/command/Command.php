<?php

namespace App\behavioral\command;

abstract class Command
{

    public function __construct(protected Receiver $receiver)
    {

    }

    abstract public function execute();
}