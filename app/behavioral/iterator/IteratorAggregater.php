<?php

namespace App\behavioral\iterator;

use IteratorAggregate;
use Traversable;

class IteratorAggregater implements IteratorAggregate
{

    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): Traversable
    {
        return new Iterator($this);
    }

    public function getReverseIterator(): Iterator
    {
        return new Iterator($this, true);
    }
}