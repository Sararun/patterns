<?php

namespace App\creation\service_management\service_locator;

use http\Exception\InvalidArgumentException;

class ServiceLocator
{
    private array $services = [];

    public function register(string $name, $service): void
    {
        $this->services[$name] = $service;
    }

    public function get(string $name)
    {
        return $this->services[$name] ?? throw new InvalidArgumentException('There is no such argument');
    }
}