<?php
// Define the Shape interface
interface Shapee {
    public function calculateArea();
    public function calculatePerimeter();
}

// Implement the Shape interface with the Circle class
class Circle implements Shapee{
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

// Implement the Shape interface with the Rectangle class
class Rectangle implements Shapee{
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
echo "Circle Area: " . $circle->calculateArea() . "\n"; // Output: Circle Area: 78.539816339745
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "\n"; // Output: Circle Perimeter: 31.415926535897
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n"; // Output: Rectangle Area: 24
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n"; // Output: Rectangle Perimeter: 20
?>
