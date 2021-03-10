<?php 
// Observer

interface Observer {
    public function add($subject);
    public function notify();
}

class StockSim implements Observer {
    private $companies; 

    public function add();
}

// StockSim-> getUpdatedInfo

// Brokers -> take care of individual companies

interface Company {
    public function buy();
    public function sell();
    public function update();
}

class Google implements Company {
    public function buy() {
        // ...
    }

    public function sell() {
        // ...
    }

    public function update() {
        // ...
    }
}

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Observer pattern is designed to keep an eye out (observe) on an object's changes.
That object is known as the subject. 
When the changes occur, a notification is sent to an observer. 
The Observer pattern is used when we need to have one action update many others (as in a one-to-many relationship).
*/