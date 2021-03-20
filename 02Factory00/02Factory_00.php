<?php
// Factory
interface Shape {
    public function draw();
}

class Rectangle implements Shape {
    public $x;
    public $y;
    public $a;
    public $b;


    public function draw() {
        echo "Drawing a rectangle";
    }
}

function drawStuff(Shape $shape) {
    $shape->draw();
}

$shape new Rectangle();
drawStuff($shape);

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Factory helps de-couple your code, so that the client code doesn't need to worry about how to construct objects. 
This pattern isolates the code to test different things or have the logic in one place. 
In testing, the Factory pattern creates a mock class that prevents us from assuming that the class also works. 
*/
