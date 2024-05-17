<?php
// Arithmetic Operators
$a = 10;
$b = 5;
echo "Arithmetic Operators:\n";
echo "Addition: " . ($a + $b) . "\n"; // Output: 15
echo "Subtraction: " . ($a - $b) . "\n"; // Output: 5
echo "Multiplication: " . ($a * $b) . "\n"; // Output: 50
echo "Division: " . ($a / $b) . "\n"; // Output: 2
echo "Modulus: " . ($a % $b) . "\n"; // Output: 0
echo "Exponentiation: " . ($a ** $b) . "\n"; // Output: 100

// Assignment Operators
$c = 15;
echo "\nAssignment Operators:\n";
$c += 5; // $c = $c + 5;
echo "Addition Assignment: " . $c . "\n"; // Output: 20
$c -= 5; // $c = $c - 5;
echo "Subtraction Assignment: " . $c . "\n"; // Output: 15
$c *= 2; // $c = $c * 2;
echo "Multiplication Assignment: " . $c . "\n"; // Output: 30
$c /= 3; // $c = $c / 3;
echo "Division Assignment: " . $c . "\n"; // Output: 10
$c %= 4; // $c = $c % 4;
echo "Modulus Assignment: " . $c . "\n"; // Output: 2

// Comparison Operators
echo "\nComparison Operators:\n";
$x = 10;
$y = 5;
echo "Equal to: " . ($x == $y) . "\n"; // Output: 0 (false)
echo "Not equal to: " . ($x != $y) . "\n"; // Output: 1 (true)
echo "Greater than: " . ($x > $y) . "\n"; // Output: 1 (true)
echo "Less than: " . ($x < $y) . "\n"; // Output: 0 (false)
echo "Greater than or equal to: " . ($x >= $y) . "\n"; // Output: 1 (true)
echo "Less than or equal to: " . ($x <= $y) . "\n"; // Output: 0 (false)

// Logical Operators
echo "\nLogical Operators:\n";
$p = true;
$q = false;
echo "Logical AND: " . ($p && $q) . "\n"; // Output: 0 (false)
echo "Logical OR: " . ($p || $q) . "\n"; // Output: 1 (true)
echo "Logical NOT: " . (!$p) . "\n"; // Output: 0 (false)

// Increment/Decrement Operators
echo "\nIncrement/Decrement Operators:\n";
$number = 10;
echo "Initial Value: " . $number . "\n"; // Output: 10
$number++; // Increment by one
echo "After Increment: " . $number . "\n"; // Output: 11
$number--; // Decrement by one
echo "After Decrement: " . $number . "\n"; // Output: 10

// String Operators
echo "\nString Operators:\n";
$str1 = "Hello, ";
$str2 = "World!";
echo "Concatenation: " . ($str1 . $str2) . "\n"; // Output: Hello, World!

// Null Coalescing Operator
echo "\nNull Coalescing Operator:\n";
$var = null;
echo "Value: " . ($var ?? "Default Value") . "\n"; // Output: Default Value

// Ternary Operator
echo "\nTernary Operator:\n";
$num = 10;
echo "Result: " . ($num > 5 ? "Greater than 5" : "Less than or equal to 5") . "\n"; // Output: Greater than 5

// Concatenation Assignment Operator
echo "\nConcatenation Assignment Operator:\n";
$str3 = "Hello, ";
$str3 .= "PHP!";
echo "Result: " . $str3 . "\n"; // Output: Hello, PHP!
?>
