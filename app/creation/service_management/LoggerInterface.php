<?php

namespace App\creation\service_management;

interface LoggerInterface
{
    public function log(string $message): string;
}