<?php

namespace App\behavioral\chane_responsibility;

class FirstHandler extends Handler
{
    public function handleRequest(string $request): string
    {
        if ($request === "first") {
            return "FirstHandler handled the request.\n";
        } elseif ($this->nextHandler !== null) {
            return $this->nextHandler->handleRequest($request);
        }
        return 'Handler not found';
    }
}