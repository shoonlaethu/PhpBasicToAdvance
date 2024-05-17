<?php
// Define regular constants using define() function
define("PI", 3.14);
define("SITE_NAME", "My Website");

// Define constants using const keyword (PHP 5.3+)
const AUTHOR = "John Doe";
const VERSION = "1.0";

// Access regular constants
echo "PI: " . PI . "\n"; // Output: 3.14
echo "Site Name: " . SITE_NAME . "\n"; // Output: My Website

// Access constants defined using const keyword
echo "Author: " . AUTHOR . "\n"; // Output: John Doe
echo "Version: " . VERSION . "\n"; // Output: 1.0




// Constants in Classes
class Math {
    const PI = 3.14;
}
echo "Math::PI: " . Math::PI . "\n"; // Output: 3.14


// Magic Constants
echo "Line Number: " . __LINE__ . "\n"; // Output: Current line number
echo "File Path: " . __FILE__ . "\n"; // Output: Full path and filename of the file
echo "Directory: " . __DIR__ . "\n"; // Output: Directory of the file

function testFunction() {
    echo "Function Name: " . __FUNCTION__ . "\n"; // Output: Name of the current function
}

class TestClass {
    public function testMethod() {
        echo "Class Name: " . __CLASS__ . "\n"; // Output: Name of the current class
        echo "Method Name: " . __METHOD__ . "\n"; // Output: Name of the current method
    }
}

$testObject = new TestClass();
$testObject->testMethod();

?>
