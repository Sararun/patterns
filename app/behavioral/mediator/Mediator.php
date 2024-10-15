<?php

namespace App\behavioral\mediator;

interface Mediator
{
    public function notify(Component $sender, string $event);
}