<?php

namespace App\behavioral\mediator;

class ConcreteMediator implements Mediator
{

    public function __construct(public Button $button, public TextField $textField)
    {
        $this->button->setMediator($this);
        $this->textField->setMediator($this);
    }

    public function notify(Component $sender, string $event)
    {
        if ($event == 'click') {
            echo "Mediator reacts on button click and triggers following operations:\n";
            $this->textField->keyPress();
        } elseif ($event == 'keyPress') {
            echo "Mediator reacts on key press and triggers following operations:\n";
        }
    }
}