<?php

namespace App\structural\facade;

final readonly class OperationFacade
{

    public function __construct(private SubSystemContract $subSystem1, private SubSystemContract $subSystem2)
    {
    }

    public function subsystemsOperations(): array
    {
        return
            [
                $this->subSystem1->operation1(),
                $this->subSystem1->operation2(),
                $this->subSystem2->operation1(),
                $this->subSystem2->operation2()
            ];
    }
}