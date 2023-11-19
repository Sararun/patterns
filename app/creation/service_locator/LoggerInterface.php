<?php

namespace App\creation\service_locator;

interface LoggerInterface
{
    public function log(string $message): string;
}