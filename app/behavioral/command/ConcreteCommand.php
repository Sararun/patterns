<?php

namespace App\behavioral\command;

class ConcreteCommand extends Command
{

    public function execute(): string
    {
        return $this->receiver->action();
    }
}