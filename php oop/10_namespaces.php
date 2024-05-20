<!-- 
Namespaces are qualifiers that solve two different problems:

They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class -->

<!-- namespace Html; -->

<?php

namespace MyNamespace;
class MyClass1 {
    public function __construct() {
        echo "MyClass constructor called.\n";
    }
}
function myFunction() {
    echo "myFunction called.\n";
}
const MY_CONSTANT = 123;
// Use code from the namespace
$obj = new MyClass1();
myFunction();
echo MY_CONSTANT . "\n";

// Define a nested namespace
namespace MyNamespace\SubNamespace;

// Define a class within the nested namespace
class SubClass {
    public function __construct() {
        echo "SubClass constructor called.\n";
    }
}
$obj = new SubClass();

// Create an instance of the class from the global namespace
class GlobalClass {
    public function __construct() {
        echo "GlobalClass constructor called.\n";
    }
}
$obj = new GlobalClass();
?>
