<?php

namespace App\creation\factory_method;

class BlogsApptEncoder implements ApptEncoder
{

    public function encode(): string
    {
        return 'Data of meeting in format BlogsApptEncoder';
    }
}