<?php
// Double quotes
$str = "He said, \"Hello, World!\"";
echo $str . "\n"; // Output: He said, "Hello, World!"

// Single quotes
$str = 'It\'s a beautiful day!';
echo $str . "\n"; // Output: It's a beautiful day!

// Newline
$str = "Hello,\nWorld!";
echo $str . "\n"; 
// Output: 
// Hello,
// World!

// Tab
$str = "Hello,\tWorld!";
echo $str . "\n"; // Output: Hello,   World!

// Backslash
$str = "This is a backslash: \\";
echo $str . "\n"; // Output: This is a backslash: \

// Dollar sign
$str = "This is a dollar sign: \$100";
echo $str . "\n"; // Output: This is a dollar sign: $100

// Carriage return
$str = "Hello,\rWorld!";
echo $str . "\n"; 
// Output: 
// World! (the "Hello," part will be overwritten in some environments)

$str = "12345\rABCDE";
echo $str . "\n";
// Output: ABCDE5

?>
