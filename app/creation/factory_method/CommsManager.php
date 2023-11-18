<?php

namespace App\creation\factory_method;

interface CommsManager
{
    public function getAptEncoder(): ApptEncoder;
}