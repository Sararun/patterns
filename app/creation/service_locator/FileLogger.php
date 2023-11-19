<?php

namespace App\creation\service_locator;

class FileLogger implements LoggerInterface
{
    public function log(string $message): string
    {
        return $message;
    }
}