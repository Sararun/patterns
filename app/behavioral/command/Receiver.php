<?php

namespace App\behavioral\command;

class Receiver
{
    public function action(): string
    {
        return "Action executed by receiver.\n";
    }
}