<?php

namespace App\behavioral\iterator;

class Iterator implements \Iterator
{
    private int $position = 0;


    public function __construct(private readonly IteratorAggregater $collection, private readonly bool $reverse = false)
    {

    }


    public function current(): mixed
    {
        return $this->collection->getItems()[$this->position];
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }
}