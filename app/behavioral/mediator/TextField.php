<?php

namespace App\behavioral\mediator;

class TextField extends Component
{
    public function keyPress(): void
    {
        echo "Key pressed in TextField.\n";
        $this->mediator?->notify($this, 'keyPress');
    }
}