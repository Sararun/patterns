<?php

namespace App\creation\factory_method;

class BloggsCommsManager implements CommsManager
{

    public function getAptEncoder(): ApptEncoder
    {
        return new BlogsApptEncoder();
    }
}