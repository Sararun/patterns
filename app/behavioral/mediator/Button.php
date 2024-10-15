<?php

namespace App\behavioral\mediator;

class Button extends Component
{
    public function click(): void
    {
        echo "Button clicked.\n";
        $this->mediator?->notify($this, 'click');
    }
}