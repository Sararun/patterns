<?php

namespace App\structural\facade;

final readonly class SubSystem1 implements SubSystemContract
{
    public function operation1(): string
    {
        return 'Echo operation 1 from Sub system 1';
    }

    public function operation2(): string
    {
        return 'Echo operation 1 from Sub system 1';
    }
}