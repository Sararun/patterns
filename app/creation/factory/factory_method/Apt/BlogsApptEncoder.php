<?php

namespace App\creation\factory\factory_method\Apt;

class BlogsApptEncoder implements ApptEncoder
{

    public function encode(): string
    {
        return 'Data of meeting in format BlogsApptEncoder';
    }
}