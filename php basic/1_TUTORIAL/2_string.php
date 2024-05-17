<?php
// Example of various string methods in PHP

// 1. strlen() - Returns the length of a string
$str = "Hello, World!";
echo "Length: " . strlen($str) . "\n"; // Output: Length: 13

// 2. str_replace() - Replaces all occurrences of the search string with the replacement string
$str = "Hello, World!";
$newStr = str_replace("World", "PHP", $str);
echo $newStr . "\n"; // Output: Hello, PHP!

// 3. strpos() - Finds the position of the first occurrence of a substring in a string
$str = "Hello, World!";
$pos = strpos($str, "World");
echo $pos . "\n"; // Output: 7

// 4. substr() - Returns a part of a string
$str = "Hello, World!";
$subStr = substr($str, 7, 5);
echo $subStr . "\n"; // Output: World

// 5. strtolower() and strtoupper() - Converts a string to lowercase or uppercase
$str = "Hello, World!";
echo strtolower($str) . "\n"; // Output: hello, world!
echo strtoupper($str) . "\n"; // Output: HELLO, WORLD!

// 6. trim() - Removes whitespace (or other characters) from the beginning and end of a string
$str = "   Hello, World!   ";
$trimmedStr = trim($str);
echo $trimmedStr . "\n"; // Output: Hello, World!

// 7. explode() - Splits a string by a string
//string to array
$str = "Hello, World!";
$arr = explode(", ", $str);
print_r($arr); // Output: Array ( [0] => Hello [1] => World! )

// 8. implode() - Joins array elements with a string
$arr = array("Hello", "World!");
$str = implode(", ", $arr);
echo $str . "\n"; // Output: Hello, World!

// 9. strcmp() - Compares two strings (case-sensitive)
$str1 = "Hello";
$str2 = "hello";
$result = strcmp($str1, $str2);
echo $result . "\n"; // Output: -1 (because 'H' < 'h' in ASCII)

// 10. strcasecmp() - Compares two strings (case-insensitive)
$result = strcasecmp($str1, $str2);
echo $result . "\n"; // Output: 0 (because the comparison is case-insensitive)

// 11. strrev() - Reverses a string
$str = "Hello, World!";
echo strrev($str) . "\n"; // Output: !dlroW ,olleH

// 12. substr_count() - Counts the number of times a substring occurs in a string
$str = "Hello, World! Hello, PHP!";
$count = substr_count($str, "Hello");
echo $count . "\n"; // Output: 2

// 13. nl2br() - Inserts HTML line breaks before all newlines in a string
$str = "Hello, World!\nWelcome to PHP!";
echo nl2br($str) . "\n"; 
// Output: Hello, World!<br />Welcome to PHP!

// 14. md5() - Calculates the MD5 hash of a string
$str = "Hello, World!";
$hash = md5($str);
echo $hash . "\n"; // Output: fc3ff98e8c6a0d3087d515c0473f8677

// 15. sprintf() - Returns a formatted string
$num = 5;
$location = "tree";
$format = "There are %d monkeys in the %s";
echo sprintf($format, $num, $location) . "\n"; 
// Output: There are 5 monkeys in the tree

// 16. htmlspecialchars() - Converts special characters to HTML entities
$str = "<a href='test'>Test</a>";
echo htmlspecialchars($str) . "\n"; 
// Output: &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

// 17. htmlspecialchars_decode() - Converts special HTML entities back to characters
$encodedStr = htmlspecialchars($str);
$decodedStr = htmlspecialchars_decode($encodedStr);
echo $decodedStr . "\n"; 
// Output: Hello 'World'

// 18. addslashes() - Adds backslashes before characters that need to be escaped in a string
$str = "Hello 'World'";
echo addslashes($str) . "\n"; 
// Output: Hello \'World\'


?>
