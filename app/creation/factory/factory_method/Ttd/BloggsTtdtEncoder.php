<?php

namespace App\creation\factory\factory_method\Ttd;


class BloggsTtdtEncoder implements TtdEncoder
{
    public function encode(): string
    {
        return 'Data of meeting in format BlogsTtdEncoder';
    }
}
