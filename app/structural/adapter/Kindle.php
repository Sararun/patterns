<?php

namespace App\structural\adapter;

class Kindle implements Ebook
{
    private int $page = 1;

    private int $totalPages = 100;


    public function pressNext(): void
    {
        $this->page++;
    }


    public function unlock()
    {
    }

    /**
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}