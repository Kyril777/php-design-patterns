<?php
// Command

// Command Interface
interface Command {
    public function execute();
}

class GetCompanyCommand implements Command {
    private $stockSim;

    // ...

    public function execute() {
        $this->stockSim->getCompany();
    }
}

class UpdatePricesCommand implements Command {
    private $stockSim;

    // ... 

    public function execute() {
        $this->stockSim->updatePrice();
    }
}

// ----------------------------------------------

// Receiver
class StockSim {
    public function getCompany() {
        // ... 
    }

    public function updatePrice() {
        // ...
    }
}

// ----------------------------------------------



// Client

// in == String
$in = getAction();

// Invoker
if (class_exists($in))
    $comm = new $in(new StockSim());
else
    throw new Exception("...")

$comm->exe();

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Command pattern allows for the encapsulation of a command or some functionality inside of an object.
The components of the Command pattern are:
1. the actual command.
2. a receiver.
3. an invoker.
4. the client.
*/