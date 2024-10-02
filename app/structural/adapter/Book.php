<?php

namespace App\structural\adapter;

interface Book
{
    public function turnPage();


    public function open();


    public function getPage(): int;
}