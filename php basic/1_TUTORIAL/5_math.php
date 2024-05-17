<?php
// Basic Arithmetic
echo "Absolute value of -5: " . abs(-5) . "\n"; // Output: 5
echo "2 raised to the power of 3: " . pow(2, 3) . "\n"; // Output: 8
echo "Square root of 16: " . sqrt(16) . "\n"; // Output: 4
echo "Exponential value of 2: " . exp(2) . "\n"; // Output: ~7.389
echo "Natural logarithm of 10: " . log(10) . "\n"; // Output: ~2.303
echo "Base-10 logarithm of 100: " . log10(100) . "\n"; // Output: 2

// Trigonometric Functions
echo "Sine of pi/2: " . sin(M_PI/2) . "\n"; // Output: 1
echo "Arc cosine of 0.5: " . acos(0.5) . "\n"; // Output: ~1.047

// Rounding Functions
echo "Ceiling of 4.2: " . ceil(4.2) . "\n"; // Output: 5
echo "Floor of 4.7: " . floor(4.7) . "\n"; // Output: 4
echo "Rounded value of 4.56 with precision 1: " . round(4.56, 1) . "\n"; // Output: 4.6

// Random Number Functions
echo "Random number between 1 and 10: " . rand(1, 10) . "\n";

// Using min() and max() with arguments
echo "Minimum value: " . min(3, 5, 1, 9, 2) . "\n"; // Output: 1
echo "Maximum value: " . max(3, 5, 1, 9, 2) . "\n"; // Output: 9

?>
