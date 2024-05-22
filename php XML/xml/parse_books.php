<?php
// http://yourserver/parse_books.php

// Load XML data from file
$xmlFile = 'books.xml';
$xml = simplexml_load_file($xmlFile);

// Check if XML was loaded successfully
if ($xml === false) {
    die('Error: Unable to load XML file.');
}

// Loop through each book and display information
echo "<h1>Books Collection</h1>";
echo "<ul>";
foreach ($xml->book as $book) {
    echo "<li>";
    echo "<strong>Title:</strong> " . $book->title . "<br>";
    echo "<strong>Author:</strong> " . $book->author . "<br>";
    echo "<strong>Genre:</strong> " . $book->genre . "<br>";
    echo "<strong>Year:</strong> " . $book->year . "<br>";
    echo "</li>";
}
echo "</ul>";
?>
