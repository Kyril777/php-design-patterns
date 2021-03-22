<?php
// Factory
interface Shape {
    public function draw();
}

class Position { }
class Rectangle implements Shape {
 
    private $position;

    public function __construct($pos) {
        $this->position = $pos;
    }

    public function draw() {
        echo "Drawing a rectangle.";
    }
}

class ShapeFactory {
    public function create($type) {
        if ($type === "Rectangle") {
            return new Rectangle(new Position());
        }
    }
}

$factory = new ShapeFactor();

$rect = $factory->create("Rectangle");
echo $rect->draw();


/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Factory helps de-couple your code, so that the client code doesn't need to worry about how to construct objects. 
This pattern isolates the code to test different things or have the logic in one place. 
In testing, the Factory pattern creates a mock class that prevents us from assuming that the class also works. 
*/
