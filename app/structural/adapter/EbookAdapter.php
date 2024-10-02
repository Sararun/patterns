<?php

namespace App\structural\adapter;


class EbookAdapter implements Book
{
    public function __construct(protected EBook $eBook)
    {
    }


    public function open()
    {
        $this->eBook->unlock();
    }


    public function turnPage()
    {
        $this->eBook->pressNext();
    }


    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}