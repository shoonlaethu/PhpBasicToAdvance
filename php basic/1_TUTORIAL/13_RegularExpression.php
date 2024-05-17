<?php 

$string = "The quick brown fox jumps over the lazy dog.";
$pattern = "/fox/i";

// preg_match()
if (preg_match($pattern, $string)) {
    echo "Pattern found using preg_match().\n";
} else {
    echo "Pattern not found using preg_match().\n";
}
// Pattern found using preg_match().


// preg_match_all()
$matches_count = preg_match_all($pattern, $string, $matches);
echo "Number of matches found using preg_match_all(): $matches_count\n";
// Number of matches found using preg_match_all(): 1

// preg_replace()
$new_string = preg_replace($pattern, "cat", $string);
echo "String after replacement using preg_replace(): $new_string\n";
// String after replacement using preg_replace(): The quick brown cat jumps over the lazy dog.

///------------------------------------------------------------------------------------------------------------------------------------------------

$string2 = "2022-01-01";
$pattern2 = "/(\d{4})-(\d{2})-(\d{2})/";
if (preg_match($pattern2, $string2, $matches)) {
    $year = $matches[1];
    $month = $matches[2];
    $day = $matches[3];
    echo "Year: $year, Month: $month, Day: $day\n";
}
// Year: 2022, Month: 01, Day: 01



///------------------------------------------------------------------------------------------------------------------------------------------------
$string3 = "The quick brown fox jumps over the lazy dog.";
// Regular expression pattern
$pattern3 = "/brown.*dog/i";

// Perform pattern matching
if (preg_match($pattern3, $string3)) {
    echo "Pattern found.\n";
} else {
    echo "Pattern not found.\n";
}
//explain
// The regular expression pattern /brown.*dog/i:
// brown: Matches the literal string "brown".
// .*: Matches any character (except newline) zero or more times.
// dog: Matches the literal string "dog".
// i modifier makes the pattern case-insensitive.
// preg_match() is used to perform pattern matching. It returns true if the pattern is found in the string, and false otherwise.
//output---->pattern found ....




///------------------------------------------------------------------------------------------------------------------------------------------------
// Modifiers:
//     Modifiers are optional flags that can be appended to the end of a regular expression to change its behavior. Some common modifiers in PHP include:
    
//     i: Makes the pattern case-insensitive.
//     m: Allows ^ and $ to match the start and end of each line (multi-line mode).
//     s: Allows . to match newline characters (single-line mode).
//     x: Ignores whitespace and allows comments within the pattern (extended mode).
//     u: Enables full Unicode support.
//     g: Global matching (for functions like preg_replace()).
//     Regular Expression Patterns:
//     Regular expression patterns are sequences of characters that define a search pattern. They can include literal characters, metacharacters, character classes, quantifiers, and grouping constructs. Patterns are enclosed between delimiters, such as /pattern/.
    
//     Metacharacters:
//     Metacharacters are special characters with predefined meanings in regular expressions. Some common metacharacters include:
    
//     .: Matches any single character except newline characters.
//     ^: Matches the start of the string or the start of a line (in multiline mode).
//     $: Matches the end of the string or the end of a line (in multiline mode).
//     |: Alternation, matches either the pattern on its left or the pattern on its right.
//     []: Character class, matches any single character within the brackets.
//     (): Grouping construct, defines a subexpression or captures a matched substring.
//     Quantifiers:
//     Quantifiers specify how many times a character or a group of characters should be matched. Some common quantifiers include:
    
//     *: Matches zero or more occurrences of the preceding element.
//     +: Matches one or more occurrences of the preceding element.
    // ?: Matches zero or one occurrence of the preceding element (makes it optional).
//     {n}: Matches exactly n occurrences of the preceding element.
//     {n,}: Matches n or more occurrences of the preceding element.
//     {n,m}: Matches between n and m occurrences of the preceding element.




?>