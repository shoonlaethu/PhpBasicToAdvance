<?php
//-------------array types------------------

// Indexed Array
$indexedArray11 = array(10, 20, 30, 40, 50);
echo "Indexed Array:\n";
foreach ($indexedArray11 as $value) {
    echo $value . " ";
}
echo "\n";

// Associative Array
$associativeArray22 = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);
echo "\nAssociative Array:\n";
foreach ($associativeArray22 as $key => $value) {
    echo $key . ": " . $value . "\n";
}

// Multidimensional Array
$multidimensionalArray33 = array(
    array("apple", "banana", "cherry"),
    array("carrot", "potato", "tomato"),
    array("orange", "grape", "lemon")
);
echo "\nMultidimensional Array:\n";
foreach ($multidimensionalArray33 as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "\n";
}



//-------------working with array------------------
// Creating an Array
$array1 = array(1, 2, 3, 4, 5);
$array2 = [6, 7, 8, 9, 10];

// Accessing Array Elements
echo "Accessing Array Elements:\n";
echo "First element of array1: " . $array1[0] . "\n"; // Output: 1
echo "Last element of array2: " . $array2[count($array2) - 1] . "\n"; // Output: 10

// Modifying Array Elements
echo "\nModifying Array Elements:\n";
$array1[0] = 11;
$array2[4] = 20;
print_r($array1); // Output: Array ( [0] => 11 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
print_r($array2); // Output: Array ( [0] => 6 [1] => 7 [2] => 8 [3] => 9 [4] => 20 )

// Adding Elements to an Array
echo "\nAdding Elements to an Array:\n";
$array1[] = 12;
$array2[] = 21;
print_r($array1); // Output: Array ( [0] => 11 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 12 )
print_r($array2); // Output: Array ( [0] => 6 [1] => 7 [2] => 8 [3] => 9 [4] => 20 [5] => 21 )

// Removing Elements from an Array
echo "\nRemoving Elements from an Array:\n";
array_pop($array1); // Removes the last element
array_shift($array2); // Removes the first element
print_r($array1); // Output: Array ( [0] => 11 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
print_r($array2); // Output: Array ( [0] => 7 [1] => 8 [2] => 9 [3] => 20 [4] => 21 )

// Iterating through an Array
echo "\nIterating through an Array:\n";
foreach ($array1 as $element) {
    echo $element . " ";
}
echo "\n"; // Output: 11 2 3 4 5

// Multidimensional Arrays
echo "\nMultidimensional Arrays:\n";
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo "Element at row 2, column 3: " . $matrix[1][2] . "\n"; // Output: 6

// Sorting Arrays
echo "\nSorting Arrays:\n";
$unsortedArray = [5, 2, 8, 4, 1];
sort($unsortedArray); // Sorts in ascending order
print_r($unsortedArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 8 )

// Searching in Arrays
echo "\nSearching in Arrays:\n";
$haystack = [10, 20, 30, 40, 50];
$needle = 30;
if (in_array($needle, $haystack)) {
    echo "Found $needle in the array.\n"; // Output: Found 30 in the array.
} else {
    echo "Not found.\n";
}

//-------------array function------------------



//------------------- Indexed Array Functions:

// Sample Indexed Array
$indexedArray = [10, 20, 30, 40, 50];

// Sample Associative Array
$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

// array_change_key_case(): Changes the case of all keys in an array
$changedKeyCaseArray = array_change_key_case($associativeArray, CASE_UPPER);
echo "Changed key case of associativeArray: ";
print_r($changedKeyCaseArray); // Output: ["NAME" => "John", "AGE" => 30, "CITY" => "New York"]

// array_chunk(): Splits an array into chunks
$chunkedArray = array_chunk($indexedArray, 2);
echo "Chunked indexedArray: ";
print_r($chunkedArray); // Output: [[10, 20], [30, 40], [50]]

// array_column(): Returns the values from a single column in the input array
$multidimensionalArray = [
    ["id" => 1, "name" => "John"],
    ["id" => 2, "name" => "Jane"],
    ["id" => 3, "name" => "Doe"]
];
$columnArray = array_column($multidimensionalArray, "name");
echo "Names from multidimensionalArray: ";
print_r($columnArray); // Output: ["John", "Jane", "Doe"]

// array_combine(): Creates an array by using one array for keys and another for its values
$keys = ["a", "b", "c"];
$values = [1, 2, 3];
$combinedArray = array_combine($keys, $values);
echo "Combined array: ";
print_r($combinedArray); // Output: ["a" => 1, "b" => 2, "c" => 3]

// array_count_values(): Counts all the values of an array
$countValuesArray = array_count_values($indexedArray);
echo "Count of values in indexedArray: ";
print_r($countValuesArray); // Output: [10 => 1, 20 => 1, 30 => 1, 40 => 1, 50 => 1]

// array_diff(): Computes the difference of arrays
$diffArray = array_diff([1, 2, 3, 4], [2, 3, 5]);
echo "Difference between arrays: ";
print_r($diffArray); // Output: [0 => 1, 3 => 4]

// array_fill(): Fills an array with values
$filledArray = array_fill(0, 5, "value");
echo "Filled array: ";
print_r($filledArray); // Output: [0 => "value", 1 => "value", 2 => "value", 3 => "value", 4 => "value"]

// array_fill_keys(): Fills an array with values, specifying keys
$keys = ["a", "b", "c"];
$value = "value";
$filledKeysArray = array_fill_keys($keys, $value);
echo "Filled array with keys: ";
print_r($filledKeysArray); // Output: ["a" => "value", "b" => "value", "c" => "value"]

// array_filter(): Filters elements of an array using a callback function
$filteredArray = array_filter($indexedArray, function($value) {
    return $value > 30;
});
echo "Filtered array: ";
print_r($filteredArray); // Output: [3 => 40, 4 => 50]

// array_flip(): Exchanges all keys with their associated values in an array
$flippedArray = array_flip($associativeArray);
echo "Flipped associativeArray: ";
print_r($flippedArray); // Output: ["John" => "name", 30 => "age", "New York" => "city"]

// array_intersect(): Computes the intersection of arrays
$intersectArray = array_intersect([1, 2, 3, 4], [2, 3, 5]);
echo "Intersection between arrays: ";
print_r($intersectArray); // Output: [1 => 2, 2 => 3]

// array_key_exists(): Checks if the given key or index exists in the array
$keyExists = array_key_exists(0, $indexedArray);
echo "Key 0 exists in indexedArray: ";
var_dump($keyExists); // Output: Key 0 exists in indexedArray: bool(true)

// array_keys(): Returns all the keys or a subset of the keys of an array
$keysArray = array_keys($indexedArray);
echo "Keys of indexedArray: ";
print_r($keysArray); // Output: Keys of indexedArray: [0, 1, 2, 3, 4]

// array_map(): Applies the callback to the elements of the given arrays
$mappedArray = array_map(function($value) {
    return $value * 2;
}, $indexedArray);
echo "Mapped array (doubled values): ";
print_r($mappedArray); // Output: Mapped array (doubled values): [20, 40, 60, 80, 100]

// array_merge(): Merges one or more arrays
$mergedArray = array_merge($indexedArray, [60, 70, 80]);
echo "Merged array: ";
print_r($mergedArray); // Output: Merged array: [10, 20, 30, 40, 50, 60, 70, 80]

// array_multisort(): Sorts multiple or multi-dimensional arrays
$sortedArray = $indexedArray;
array_multisort($sortedArray);
echo "Sorted indexedArray: ";
print_r($sortedArray); // Output: Sorted indexedArray: [10, 20, 30, 40, 50]

// array_pad(): Pads an array to the specified length with a value
$paddedArray = array_pad($indexedArray, 8, 0);
echo "Padded indexedArray: ";
print_r($paddedArray); // Output: Padded indexedArray: [10, 20, 30, 40, 50, 0, 0, 0]

// array_pop(): Pops the element off the end of the array
$poppedElement = array_pop($indexedArray);
echo "Popped element from indexedArray: $poppedElement\n";
echo "Indexed array after pop: ";
print_r($indexedArray); // Output: Popped element from indexedArray: 50
// Indexed array after pop: [10, 20, 30, 40]

// array_product(): Calculates the product of values in an array
$product = array_product($indexedArray);
echo "Product of values in indexedArray: $product\n"; // Output: Product of values in indexedArray: 24000

// array_push(): Pushes one or more elements onto the end of the array
array_push($indexedArray, 50, 60, 70);
echo "Indexed array after push: ";
print_r($indexedArray); // Output: Indexed array after push: [10, 20, 30, 40, 50, 50, 60, 70]

// array_rand(): Picks one or more random keys from an array
$randomKeys = array_rand($indexedArray, 2);
echo "Random keys from indexedArray: ";
print_r($randomKeys); // Output: Random keys from indexedArray: [0 => 2, 1 => 4]

// array_reduce(): Iteratively reduces the array to a single value using a callback function
$sum = array_reduce($indexedArray, function($carry, $item) {
    return $carry + $item;
});
echo "Sum of values in indexedArray: $sum\n"; // Output: Sum of values in indexedArray: 280

// array_search(): Searches an array for a given value and returns the corresponding key if successful
$searchKey = array_search(30, $indexedArray);
echo "Key of value 30 in indexedArray: $searchKey\n"; // Output: Key of value 30 in indexedArray: 2

// array_shift(): Shifts an element off the beginning of the array
$shiftedElement = array_shift($indexedArray);
echo "Shifted element from indexedArray: $shiftedElement\n";
echo "Indexed array after shift: ";
print_r($indexedArray); // Output: Shifted element from indexedArray: 10
// Indexed array after shift: [20, 30, 40, 50, 50, 60, 70]

// array_slice(): Extracts a slice of the array
$slicedArray = array_slice($indexedArray, 2, 3);
echo "Sliced array: ";
print_r($slicedArray); // Output: Sliced array: [40, 50, 50]

// array_splice(): Removes a portion of the array and replaces it with something else
$removedArray = array_splice($indexedArray, 2, 2);
echo "Removed elements from indexedArray: ";
print_r($removedArray); // Output: Removed elements from indexedArray: [40, 50]
echo "Indexed array after splice: ";
print_r($indexedArray); // Output: Indexed array after splice: [20, 30, 50, 60, 70]

// array_sum(): Calculates the sum of values in an array
$sum = array_sum($indexedArray);
echo "Sum of values in indexedArray: $sum\n"; // Output: Sum of values in indexedArray: 230

// array_udiff(): Computes the difference of arrays by using a callback function for data comparison
$diffArray = array_udiff([1, 2, 3], [2, 3, 5], function($a, $b) {
    return $a <=> $b;
});
echo "Difference between arrays (array_udiff): ";
print_r($diffArray); // Output: Difference between arrays (array_udiff): [0 => 1]

// array_udiff_assoc(): Computes the difference of arrays with additional index check, using a callback function for data comparison
$diffAssocArray = array_udiff_assoc([1, 2, 3], [2, 3, 5], function($a, $b) {
    return $a <=> $b;
});
echo "Difference between arrays with index check (array_udiff_assoc): ";
print_r($diffAssocArray); // Output: Difference between arrays with index check (array_udiff_assoc): [0 => 1]

// array_udiff_uassoc(): Computes the difference of arrays with additional index check and data check, using separate callback functions for data and index comparison
$diffUassocArray = array_udiff_uassoc([1, 2, 3], [2, 3, 5], function($a, $b) {
    return $a <=> $b;
}, function($a, $b) {
    return $a <=> $b;
});
echo "Difference between arrays with index and data check (array_udiff_uassoc): ";
print_r($diffUassocArray); // Output: Difference between arrays with index and data check (array_udiff_uassoc): [0 => 1]

// array_uintersect(): Computes the intersection of arrays using a callback function for data comparison
$intersectArray = array_uintersect([1, 2, 3], [2, 3, 5], function($a, $b) {
    return $a <=> $b;
});
echo "Intersection between arrays (array_uintersect): ";
print_r($intersectArray); // Output: Intersection between arrays (array_uintersect): [1 => 2, 2 => 3]

// array_uintersect_assoc(): Computes the intersection of arrays with additional index check, using a callback function for data comparison
$intersectAssocArray = array_uintersect_assoc([1, 2, 3], [2, 3, 5], function($a, $b) {
    return $a <=> $b;
});
echo "Intersection between arrays with index check (array_uintersect_assoc): ";
print_r($intersectAssocArray); // Output: Intersection between arrays with index check (array_uintersect_assoc): [1 => 2, 2 => 3]

// array_uintersect_uassoc(): Computes the intersection of arrays with additional index check and data check, using separate callback functions for data and index comparison
$intersectUassocArray = array_uintersect_uassoc([1, 2, 3], [2, 3, 5], function($a, $b) {
    return $a <=> $b;
}, function($a, $b) {
    return $a <=> $b;
});
echo "Intersection between arrays with index and data check (array_uintersect_uassoc): ";
print_r($intersectUassocArray); // Output: Intersection between arrays with index and data check (array_uintersect_uassoc): [1 => 2, 2 => 3]

// array_unique(): Removes duplicate values from an array
$uniqueArray = array_unique([1, 2, 2, 3, 3, 3]);
echo "Unique values from array (array_unique): ";
print_r($uniqueArray); // Output: Unique values from array (array_unique): [0 => 1, 1 => 2, 3 => 3]

// array_unshift(): Adds one or more elements to the beginning of an array
array_unshift($indexedArray, 5);
echo "Indexed array after unshift: ";
print_r($indexedArray); // Output: Indexed array after unshift: [5, 10, 20, 30, 40, 50]

// compact(): Create an array containing variables and their values
$name = "John";
$age = 30;
$city = "New York";
$compactArray = compact("name", "age", "city");
echo "Compact array: ";
print_r($compactArray); // Output: Compact array: ["name" => "John", "age" => 30, "city" => "New York"]

$indexedArray = [10, 20, 30, 40, 50];

// count(): Count the elements in an array
$count = count($indexedArray);
echo "Count of indexedArray: $count\n"; // Output: Count of indexedArray: 5

$current = current($indexedArray);
echo "Current element of indexedArray: $current\n"; // Output: Current element of indexedArray: 10

$each = each($indexedArray);
echo "Current key-value pair from indexedArray: ";
print_r($each); // Output: Current key-value pair from indexedArray: [1 => 10, "value" => 10, "key" => 0]

// end(): Set the internal pointer of an array to its last element
$last = end($indexedArray);
echo "Last element of indexedArray: $last\n"; // Output: Last element of indexedArray: 50

// extract(): Import variables into the current symbol table from an array
$associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];
extract($associativeArray);
echo "Name: $name, Age: $age, City: $city\n"; // Output: Name: John, Age: 30, City: New York

// in_array(): Checks if a value exists in an array
$exists = in_array(30, $indexedArray);
echo "Value 30 exists in indexedArray: ";
var_dump($exists); // Output: Value 30 exists in indexedArray: bool(true)

// key(): Fetch a key from an array
$key = key($indexArray2);
echo "Current key of indexArray2: $key\n"; // Output: Current key of indexArray2: 0

// list(): Assign variables as if they were an array
$indexArray3 = [10, 20, 30];
list($a, $b, $c) = $indexArray3;
echo "List variables: a=$a, b=$b, c=$c\n"; // Output: List variables: a=10, b=20, c=30

// next(): Advance the internal pointer of an array
$next = next($indexArray2);
echo "Next element of indexArray2: $next\n"; // Output: Next element of indexArray2: 20

// pos(): Alias of current()
$position = pos($indexArray2);
echo "Position of internal pointer in indexArray2: $position\n"; // Output: Position of internal pointer in indexArray2: 10

// prev(): Rewind the internal pointer of an array
$prev = prev($indexArray2);
echo "Previous element of indexArray2: $prev\n"; // Output: Previous element of indexArray2: 10

// range(): Create an array containing a range of elements
$rangeArray = range(1, 5);
echo "Range array: ";
print_r($rangeArray); // Output: Range array: [1, 2, 3, 4, 5]

// sizeof(): Alias of count()
$size = sizeof($indexArray2);
echo "Size of indexArray2: $size\n"; // Output: Size of indexArray2: 5




// -------------------Associative Array Functions:

// Sample Associative Array
$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

// asort(): Sort an array and maintain index association
asort($associativeArray);
echo "Sorted associativeArray (asort): ";
print_r($associativeArray); // Output: Sorted associativeArray (asort): ["age" => 30, "city" => "New York", "name" => "John"]

// arsort(): Sort an array in reverse order and maintain index association
arsort($associativeArray);
echo "Reverse sorted associativeArray (arsort): ";
print_r($associativeArray); // Output: Reverse sorted associativeArray (arsort): ["name" => "John", "city" => "New York", "age" => 30]

// krsort(): Sort an array by key in reverse order, maintaining key association
krsort($associativeArray);
echo "Reverse sorted by key associativeArray (krsort): ";
print_r($associativeArray); // Output: Reverse sorted by key associativeArray (krsort): ["name" => "John", "city" => "New York", "age" => 30]

// ksort(): Sort an array by key
ksort($associativeArray);
echo "Sorted by key associativeArray (ksort): ";
print_r($associativeArray); // Output: Sorted by key associativeArray (ksort): ["age" => 30, "city" => "New York", "name" => "John"]

// natcasesort(): Sort an array using a case-insensitive 'natural order' algorithm
$associativeArray = ["a10", "a1", "A20", "a5", "A3"];
natcasesort($associativeArray);
echo "Case-insensitive natural order sorted associativeArray (natcasesort): ";
print_r($associativeArray); // Output: Case-insensitive natural order sorted associativeArray (natcasesort): ["a1", "A3", "a5", "a10", "A20"]

// natsort(): Sort an array using a 'natural order' algorithm
$associativeArray = ["10", "1", "20", "5", "3"];
natsort($associativeArray);
echo "Natural order sorted associativeArray (natsort): ";
print_r($associativeArray); // Output: Natural order sorted associativeArray (natsort): ["1", "3", "5", "10", "20"]

// reset(): Set the internal pointer of an array to its first element
$firstElement = reset($associativeArray);
echo "First element of associativeArray: $firstElement\n"; // Output: First element of associativeArray: 1

// sort(): Sort an array
sort($associativeArray);
echo "Sorted associativeArray (sort): ";
print_r($associativeArray); // Output: Sorted associativeArray (sort): ["1", "10", "20", "3", "5"]

// rsort(): Sort an array in reverse order
rsort($associativeArray);
echo "Reverse sorted associativeArray (rsort): ";
print_r($associativeArray); // Output: Reverse sorted associativeArray (rsort): ["5", "3", "20", "10", "1"]

// shuffle(): Shuffle an array
shuffle($associativeArray);
echo "Shuffled associativeArray: ";
print_r($associativeArray); // Output: Shuffled associativeArray: [0 => "20", 1 => "1", 2 => "10", 3 => "5", 4 => "3"]

// uasort(): Sort an array with a user-defined comparison function and maintain index association
uasort($associativeArray, function($a, $b) {
    return $a <=> $b;
});
echo "User-defined sort with index association (uasort): ";
print_r($associativeArray); // Output: User-defined sort with index association (uasort): ["1", "3", "5", "10", "20"]

// uksort(): Sort an array by keys using a user-defined comparison function
uksort($associativeArray, function($a, $b) {
    return $a <=> $b;
});
echo "User-defined key sort (uksort): ";
print_r($associativeArray); // Output: User-defined key sort (uksort): ["1", "3", "5", "10", "20"]

// usort(): Sort an array by values using a user-defined comparison function
usort($associativeArray, function($a, $b) {
    return $a <=> $b;
});
echo "User-defined value sort (usort): ";
print_r($associativeArray); // Output: User-defined value sort (usort): ["1", "3", "5", "10", "20"]




// ----------------------------Sample Multidimensional Array

$multiArray = [
    ["name" => "John", "age" => 30, "city" => "New York"],
    ["name" => "Alice", "age" => 25, "city" => "Los Angeles"],
    ["name" => "Bob", "age" => 35, "city" => "Chicago"]
];

// array_multisort(): Sort multiple or multidimensional arrays
array_multisort(array_column($multiArray, "age"), SORT_ASC, $multiArray);
echo "Sorted by age ascending:\n";
print_r($multiArray); // Output: Sorted by age ascending: [ ["name" => "Alice", "age" => 25, "city" => "Los Angeles"], ["name" => "John", "age" => 30, "city" => "New York"], ["name" => "Bob", "age" => 35, "city" => "Chicago"] ]

// array_replace(): Replaces elements from passed arrays into the first array
$newArray = ["name" => "Tom", "age" => 40];
$replacedArray = array_replace($multiArray[0], $newArray);
echo "Replaced array:\n";
print_r($replacedArray); // Output: Replaced array: [ "name" => "Tom", "age" => 40, "city" => "New York" ]

// array_replace_recursive(): Replaces elements from passed arrays into the first array recursively
$newArray = ["name" => ["first" => "Tom"]];
$replacedArray = array_replace_recursive($multiArray[0], $newArray);
echo "Recursively replaced array:\n";
print_r($replacedArray); // Output: Recursively replaced array: [ "name" => ["first" => "Tom"], "age" => 30, "city" => "New York" ]

// array_reverse(): Reverses the order of elements in an array
$reversedArray = array_reverse($multiArray);
echo "Reversed array:\n";
print_r($reversedArray); // Output: Reversed array: [ ["name" => "Bob", "age" => 35, "city" => "Chicago"], ["name" => "John", "age" => 30, "city" => "New York"], ["name" => "Alice", "age" => 25, "city" => "Los Angeles"] ]

// array_slice(): Extracts a slice of the array
$sliceArray = array_slice($multiArray, 1, 2);
echo "Sliced array:\n";
print_r($sliceArray); // Output: Sliced array: [ ["name" => "John", "age" => 30, "city" => "New York"], ["name" => "Bob", "age" => 35, "city" => "Chicago"] ]

// array_values(): Returns all the values of an array
$valuesArray = array_values($multiArray[0]);
echo "Values of first array:\n";
print_r($valuesArray); // Output: Values of first array: [ "John", 30, "New York" ]

// array_walk(): Apply a user-defined function to every element of an array
array_walk($multiArray, function(&$value, $key) {
    $value["age"] += 5;
});
echo "Array after adding 5 to each age:\n";
print_r($multiArray); // Output: Array after adding 5 to each age: [ ["name" => "John", "age" => 35, "city" => "New York"], ["name" => "Alice", "age" => 30, "city" => "Los Angeles"], ["name" => "Bob", "age" => 40, "city" => "Chicago"] ]

// array_walk_recursive(): Apply a user-defined function recursively to every element of an array
$newArray = [
    ["name" => "John", "age" => ["current" => 30, "future" => 35]],
    ["name" => "Alice", "age" => ["current" => 25, "future" => 30]],
    ["name" => "Bob", "age" => ["current" => 35, "future" => 40]]
];
array_walk_recursive($newArray, function(&$value, $key) {
    if ($key === "future") {
        $value += 5;
    }
});
echo "Array with future age incremented by 5:\n";
print_r($newArray); // Output: Array with future age incremented by 5: [ ["name" => "John", "age" => ["current" => 30, "future" => 40]], ["name" => "Alice", "age" => ["current" => 25, "future" => 35]], ["name" => "Bob", "age" => ["current" => 35, "future" => 45]] ]



// ----------------------Other Array Functions:

// Sample Multidimensional Array
$multiArray = [
    ["name" => "John", "age" => 30, "city" => "New York"],
    ["name" => "Alice", "age" => 25, "city" => "Los Angeles"],
    ["name" => "Bob", "age" => 35, "city" => "Chicago"]
];

// extract(): Import variables into the current symbol table from an array
extract($multiArray[0]);
echo "Name: $name, Age: $age, City: $city\n"; // Output: Name: John, Age: 30, City: New York

// compact(): Create an array containing variables and their values
$name = "Tom";
$age = 40;
$city = "Boston";
$compactArray = compact("name", "age", "city");
print_r($compactArray); // Output: Array ( [name] => Tom [age] => 40 [city] => Boston )

// list(): Assign variables as if they were an array
list($name, $age, $city) = $multiArray[0];
echo "Name: $name, Age: $age, City: $city\n"; // Output: Name: John, Age: 30, City: New York

// range(): Create an array containing a range of elements
$rangeArray = range(1, 5);
print_r($rangeArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


?>
