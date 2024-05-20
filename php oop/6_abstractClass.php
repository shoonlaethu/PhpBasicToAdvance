<?php
// Abstract classes are used as templates for other classes to inherit from and provide a common interface or implementation for its subclasses
abstract class Shape {
    abstract public function calculateArea();
    abstract public function calculatePerimeter();

    public function getDescription() {
        return "This is a shape.";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Instantiate and use the Circle class
$circle = new Circle(5);
echo "Area of the circle: " . $circle->calculateArea() . "\n"; // Output: Area of the circle: 78.539816339745
echo "Perimeter of the circle: " . $circle->calculatePerimeter() . "\n"; // Output: Perimeter of the circle: 31.415926535897
echo $circle->getDescription(); // Output: This is a shape.
