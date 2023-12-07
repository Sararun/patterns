<?php

namespace App\creation\singleton;

class SoloInstance
{
    private array $props = [];

    private static self $instance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $value): void
    {
        $this->props[$key] = $value;
    }

    public function getProperty(string $key): ?string
    {
        return $this->props[$key] ?? null;
    }
}
