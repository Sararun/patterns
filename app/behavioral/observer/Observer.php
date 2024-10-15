<?php

namespace App\behavioral\observer;

class Observer implements \SplObserver
{

    /**
     * @param ObserverSubject $subject
     * @return void
     */
    public function update(\SplSubject $subject): void
    {
        if ($subject->state === 3) {
            echo "<br>";
            echo "Observer: Reacted to the event.\n";
        }
    }
}