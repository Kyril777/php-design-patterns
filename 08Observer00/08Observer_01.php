<?php 
// Observer

interface Observer {
    public function add(Company $subject);
    public function notify($price);
}

class StockSim implements Observer {
    private $companies; 

    public function __construct() {
        $this->companies = array();
    }

    public function add(Company $subject) {
        array_push($this->companies, $subject);
    }

    public function updatePrices() {
        $this->notify(rand(23.99, 199.42));
    }

    public function notify($price) {
        foreach ($this->companies as $comp) {
            $comp->update($price + rand(2.99, 1.42));
        }
    }
}

// StockSim-> getUpdatedInfo

// Brokers -> take care of individual companies

interface Company {
    public function update($price);
}

class Google implements Company {
    private $price;

    public function __construct($price) {
        $this->price = $price;
        echo "<p>Creating Google at ${price}</p>";
    }

    public function update($price) {
        $this->price = $price;
        echo "<p>Google selling for \${$this->price}</p>";
    }
}

class Walmart implements Company {
    private $price;

    public function __construct($price) {
        $this->price = $price;
        echo "<p>Creating Walmart at ${price}</p>";
    }

    public function update($price) {
        $this->price = $price;
        echo "<p>Walmart selling for \${$this->price}</p>";
    }
}




// Client

$stocksim = new StockSim();

$comp1 = new Google(19.99);
$comp2 = new Walmart(15.99);
$comp3 = new Google(19.99);
$comp4 = new Walmart(15.99);

// ...
$stocksim->add($comp1);
$stocksim->add($comp2);
$stocksim->add($comp3);
$stocksim->add($comp4);

echo "<hr>";

$stocksim->updatePrices();


/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Observer pattern is designed to keep an eye out (observe) on an object's changes.
That object is known as the subject. 
When the changes occur, a notification is sent to an observer. 
The Observer pattern is used when we need to have one action update many others (as in a one-to-many relationship).
*/
