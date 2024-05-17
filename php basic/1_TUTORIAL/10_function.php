<?php
// Example 1: Basic Function
function greet() {
    echo "Hello, World!\n";
}
echo "Example 1: Basic Function\n";
greet(); // Output: Hello, World!

// Example 2: Function with Parameters
function add($a, $b) {
    return $a + $b;
}
echo "\nExample 2: Function with Parameters\n";
$result = add(5, 3);
echo "Result of addition: " . $result . "\n"; // Output: 8

// Example 3: Function with Default Parameter
function greetName($name = "Guest") {
    echo "Hello, " . $name . "!\n";
}
echo "\nExample 3: Function with Default Parameter\n";
greetName(); // Output: Hello, Guest!
greetName("John"); // Output: Hello, John!

// Example 4: Recursive Function
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo "\nExample 4: Recursive Function\n";
echo "Factorial of 5: " . factorial(5) . "\n"; // Output: 120

// Example 5: Anonymous Function (Closure)
echo "\nExample 5: Anonymous Function (Closure)\n";
$addition = function($a, $b) {
    return $a + $b;
};
echo "Result of addition: " . $addition(8, 4) . "\n"; // Output: 12

// Example 6: Returning Multiple Values
function getCoordinates() {
    $x = 10;
    $y = 20;
    return array($x, $y);
}
echo "\nExample 6: Returning Multiple Values\n";
list($x, $y) = getCoordinates();
echo "X-coordinate: " . $x . ", Y-coordinate: " . $y . "\n"; // Output: X-coordinate: 10, Y-coordinate: 20


//--------ways to write funtion
// Standard Function Declaration
function standardFunction($param1, $param2) {
    return $param1 + $param2;
}
echo "Standard Function: " . standardFunction(5, 3) . "\n";

// Anonymous Function (Closure)
$anonymousFunction = function($param1, $param2) {
    return $param1 + $param2;
};
echo "Anonymous Function: " . $anonymousFunction(5, 3) . "\n";

// Arrow Function (PHP 7.4+)
$arrowFunction = fn($param1, $param2) => $param1 + $param2;
echo "Arrow Function: " . $arrowFunction(5, 3) . "\n";

// Method within a Class
class MyClass {
    public function classMethod($param1, $param2) {
        return $param1 + $param2;
    }
}
$myObject = new MyClass();
echo "Method within a Class: " . $myObject->classMethod(5, 3) . "\n";

// Static Method within a Class no need to make obj
class MyClassWithStatic {
    public static function staticMethod($param1, $param2) {
        return $param1 + $param2;
    }
}
echo "Static Method within a Class: " . MyClassWithStatic::staticMethod(5, 3) . "\n";




?>
