<?php

try {
    // Code that may throw an exception
    $number = 5;
    if ($number > 10) {
        throw new Exception("Number is too large.");
    }
    echo "Number is within acceptable range.<br>";
} catch (Exception $e) {
    // Catching the exception and handling it
    echo "Exception caught: " . $e->getMessage() . "<br>";
}
// Number is within acceptable range.


try {
    // Another example with a custom exception class
    class CustomException extends Exception {}
    
    // Code that may throw a custom exception
    $name = "shoon";
    if ($name != "shoonlae") {
        throw new CustomException("Invalid name.");
    }
    echo "Name is valid.<br>";
} catch (CustomException $e) {
    // Catching the custom exception and handling it
    echo "Custom exception caught: " . $e->getMessage() . "<br>";
}
// Custom exception caught: Invalid name.

try {
    // Example of nested exceptions
    try {
        // Code that may throw an exception
        throw new Exception("Nested exception.");
    } catch (Exception $e) {
        // Catching the exception and rethrowing it
        throw new Exception("Outer exception", 0, $e);
    }
} catch (Exception $e) {
    // Catching the outer exception and handling it
    echo "Nested exception caught: " . $e->getMessage() . "<br>";
}
// Nested exception caught: Outer exception

?>
