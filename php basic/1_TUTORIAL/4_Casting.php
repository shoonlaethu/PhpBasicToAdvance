<?php 


//---------- Casting Strings and Floats to Integers

// Convert float to integer
$floatValue = 456.78;
$intValue = intval($floatValue);
echo $intValue . "\n"; // Output: 456

// Convert hexadecimal string to integer
$hexStr = "1A";
$intValue = intval($hexStr, 16); // Specify base 16 for hexadecimal
echo $intValue . "\n"; // Output: 26

// Convert binary string to integer
$binaryStr = "101";
$intValue = intval($binaryStr, 2); // Specify base 2 for binary
echo $intValue . "\n"; // Output: 5

// Explicit Casting
$value = "123";
$intValue = (int)$value; // Cast to integer
$floatValue = (float)$value; // Cast to float
$stringValue = (string)$intValue; // Cast to string
$boolValue = (bool)$intValue; // Cast to boolean

echo "Explicit Casting:\n";
echo "Integer: $intValue\n";
echo "Float: $floatValue\n";
echo "String: $stringValue\n";
echo "Boolean: $boolValue\n\n";
// Explicit Casting:// Integer: 123// Float: 123// String: 123// Boolean: 1


// Implicit Casting
$intVar = 5;
$floatVar = 3.14;
$result = $intVar + $floatVar; // Implicit casting of $intVar to float

echo "Implicit Casting:\n";
echo "Result: $result\n\n";
// Implicit Casting:// Result: 8.14

// Array Casting
$value = "Hello";
$arrayValue = (array)$value; // Cast to array

echo "Array Casting:\n";
print_r($arrayValue);
echo "\n\n";
// Array Casting:
// Array
// (
//     [0] => Hello
// )

// Object Casting
$value = "Hello";
$objectValue = (object)$value; // Cast to object
echo "Object Casting:\n";
var_dump($objectValue);
echo "\n\n";
// Object Casting:
// object(stdClass)#1 (1) {
//   ["scalar"]=>
//   string(5) "Hello"
// }


// Null Casting
$value = "Hello";
$nullValue = null; // Initializing as null
$nullValue = $value ?? null; // Cast to null if $value is null
// Null Casting:// string(5) "Hello"

echo "Null Casting:\n";
var_dump($nullValue);
echo "\n";





?>