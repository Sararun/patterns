<?php

namespace App\behavioral\command;

class Invoker
{
    private Command $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        return $this->command->execute();
    }
}