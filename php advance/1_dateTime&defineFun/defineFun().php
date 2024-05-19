<!--define(name, value, case_insensitive);
//name: Specifies the name of the constant.
//value: Specifies the value of the constant.
//case_insensitive: Optional. Specifies whether the constant name should be case-insensitive. Default is false. -->
<?php

// Define a constant
define("PI", 3.14);
// Use the constant
echo "The value of PI is " . PI;


// Define a case-insensitive constant
define("GREETING", "Hello, World!", true);
// Use the constant with different case variations
echo "The greeting is " . greeting;
echo "The greeting is " . GREETING;
//The greeting is Hello, World!
//The greeting is Hello, World!





?>

