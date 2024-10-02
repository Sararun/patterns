<?php

namespace App\structural\adapter;

interface Ebook
{
    public function unlock();


    public function pressNext();


    /**
     * @return int[]
     */
    public function getPage(): array;
}