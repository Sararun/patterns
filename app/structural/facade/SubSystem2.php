<?php

namespace App\structural\facade;

final readonly class SubSystem2 implements SubSystemContract
{
    public function operation1(): string
    {
        return 'Echo operation 1 from Sub system 2';
    }

    public function operation2(): string
    {
        return 'Echo operation 1 from Sub system 2';
    }
}