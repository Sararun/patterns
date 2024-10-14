<?php

namespace App\behavioral\chane_responsibility;

class SecondHandler extends Handler
{

    public function handleRequest(string $request)
    {
        if ($request === "second") {
            return "SecondHandler handled the request.\n";
        } elseif ($this->nextHandler !== null) {
            return $this->nextHandler->handleRequest($request);
        }
        return 'Handler not found';
    }
}