<?php

namespace App\creation\service_management\dependency_injection;

use App\creation\service_management\LoggerInterface;

class Application
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(): string
    {
        return $this->logger->log('Application has been started');
    }
}