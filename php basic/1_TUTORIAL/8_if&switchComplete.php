<?php
//-------------if------------------
// Regular if-elseif-else statements
$grade = 75;

echo "Regular if-elseif-else statements:\n";
if ($grade >= 90) {
    echo "Grade: A\n";
} elseif ($grade >= 80) {
    echo "Grade: B\n";
} elseif ($grade >= 70) {
    echo "Grade: C\n";
} elseif ($grade >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}

// Nested if statements
echo "\nNested if statements:\n";
$age = 25;
$is_student = true;

if ($age >= 18) {
    if ($is_student) {
        echo "You are a student and eligible to vote.\n";
    } else {
        echo "You are eligible to vote.\n";
    }
} else {
    echo "You are not eligible to vote.\n";
}

// Shorthand if statement (Ternary Operator)
echo "\nShorthand if statement (Ternary Operator):\n";
$marks = 85;
$result = ($marks >= 60) ? "Pass" : "Fail";
echo "Result: $result\n";

// Shorthand if statement (Null Coalescing Operator)
echo "\nShorthand if statement (Null Coalescing Operator):\n";
$variable = null;
$value = $variable ?? "Default Value";
echo "Value: $value\n";


//-----------------switch--------------------
// Example 1: Basic Switch Statement
$day = "Monday";

echo "Example 1: Basic Switch Statement\n";
switch ($day) {
    case "Monday":
        echo "Today is Monday\n";
        break;
    case "Tuesday":
        echo "Today is Tuesday\n";
        break;
    case "Wednesday":
        echo "Today is Wednesday\n";
        break;
    default:
        echo "It's neither Monday, Tuesday, nor Wednesday\n";
}
// Output:
// Today is Monday

// Example 2: Switch Statement with Fallthrough
echo "\nExample 2: Switch Statement with Fallthrough\n";
$grade = "B";

switch ($grade) {
    case "A":
        echo "Excellent!\n";
    case "B":
        echo "Good!\n";
    case "C":
        echo "Fair\n";
    case "D":
        echo "Needs Improvement\n";
    default:
        echo "Invalid grade\n";
}
// Good!
// Fair
// Needs Improvement
// Invalid grade

// Example 3: Switch Statement with Multiple Conditions
echo "\nExample 3: Switch Statement with Multiple Conditions\n";
$number = 10;

switch ($number) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 9:
        echo "Odd number\n";
        break;
    case 2:
    case 4:
    case 6:
    case 8:
    case 10:
        echo "Even number\n";
        break;
    default:
        echo "Invalid number\n";
}
// Example 3: Switch Statement with Multiple Conditions
// Even number

// Example 4: Switch Statement with Return Values
echo "\nExample 4: Switch Statement with Return Values\n";
function getDayName($index) {
    switch ($index) {
        case 0:
            return "Sunday";
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        default:
            return "Invalid index";
    }
}
echo "Day at index 3: " . getDayName(3) . "\n";
echo "Day at index 8: " . getDayName(8) . "\n";
// Day at index 3: Wednesday
// Day at index 8: Invalid index
?>
