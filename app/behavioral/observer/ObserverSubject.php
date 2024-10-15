<?php

namespace App\behavioral\observer;

use SplObjectStorage;
use SplObserver;

class ObserverSubject implements \SplSubject
{
    private SplObjectStorage $observers;
    public int $state = 0;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }


    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        echo "<br>";
        echo "Subject: Notifying observers...\n";

        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function updateState(int $state): void
    {
        $this->state = $state;

        echo "<br>";
        echo "Subject: My state has just changed to: {$this->state}\n";
        $this->notify();
    }
}