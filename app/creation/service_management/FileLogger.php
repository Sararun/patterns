<?php

namespace App\creation\service_management;

class FileLogger implements LoggerInterface
{
    public function log(string $message): string
    {
        return $message;
    }
}