<?php

namespace App\creation\prototype\baseClasses;

use Exception;

abstract class Forest
{

    /**
     * @throws Exception
     */
    public function __construct(
        protected string $name, protected int $countOfTrees
    )
    {
        if ($countOfTrees < 1) {
            throw new Exception('Count of trees must be more than 0');
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getCountOfTrees(): int
    {
        return $this->countOfTrees;
    }

    public function setCountOfTrees(int $countOfTrees): self
    {
        $this->countOfTrees = $countOfTrees;
        return $this;
    }
}