<?php
// http://yourserver/parse_books_string.php

// XML data as a string
$xmlString = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<books>
    <book>
        <title>Title1</title>
        <author>author1</author>
        <genre>genre1</genre>
        <year>2024</year>
    </book>
    <book>
        <title>Title2</title>
        <author>author2</author>
        <genre>genre2</genre>
        <year>2024</year>
    </book>
</books>
XML;

// Load XML data from string
$xml = simplexml_load_string($xmlString);

// Check if XML was loaded successfully
if ($xml === false) {
    die('Error: Unable to load XML data.');
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
