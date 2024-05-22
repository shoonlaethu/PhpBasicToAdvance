<?php
// Step 1: Initialize the XML parser
$xmlParser = xml_parser_create();

// Step 2: Create functions for event handlers
function startElement($parser, $element_name, $element_attrs) {
    echo "Start tag: $element_name<br>";
}

function endElement($parser, $element_name) {
    echo "End tag: $element_name<br>";
}

function characterData($parser, $data) {
    echo "Character data: $data<br>";
}

// Step 3: Set element and character data handlers
xml_set_element_handler($xmlParser, "startElement", "endElement");
xml_set_character_data_handler($xmlParser, "characterData");

// Step 4: Parse the XML file
$xmlFile = "note.xml";
if (!($fp = fopen($xmlFile, "r"))) {
    die("Could not open XML file for parsing.");
}

while ($data = fread($fp, 4096)) {
    if (!xml_parse($xmlParser, $data, feof($fp))) {
        die(sprintf("XML error: %s at line %d",
            xml_error_string(xml_get_error_code($xmlParser)),
            xml_get_current_line_number($xmlParser)));
    }
}

// Step 5: Release memory
xml_parser_free($xmlParser);

// Step 6: Load and Output XML using SimpleXML
$xmlData = file_get_contents($xmlFile);
echo "<pre>";
echo htmlentities($xmlData);
echo "</pre>";

// Step 7: Load and traverse XML with SimpleXML
$xml = simplexml_load_file($xmlFile);
if ($xml === false) {
    die('Error: Could not load XML file.');
}

// Loop through all elements and display their names and values
echo "<h2>Looping through XML using SimpleXML</h2>";
foreach ($xml->children() as $element) {
    echo "<p>Element: " . $element->getName() . "</p>";
    echo "Value: " . $element . "<br>";
    if ($element->count() > 0) {
        echo "<ul>";
        foreach ($element->children() as $child) {
            echo "<li>" . $child->getName() . ": " . $child . "</li>";
        }
        echo "</ul>";
    }
}
?>
