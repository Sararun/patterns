<?php

namespace App\creation\factory;

use App\creation\factory\factory_method\Apt\ApptEncoder;
use App\creation\factory\factory_method\Ttd\TtdEncoder;

interface CommsManager
{
    public function getAptEncoder(): ApptEncoder;
    public function getTtdEncoder(): TtdEncoder;
}