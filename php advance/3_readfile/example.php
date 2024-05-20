<?php
$file = 'example.txt';

// Check if the file exists
if (file_exists($file)) {
    // Set headers for download
    header('Content-Description: File Transfer');
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Content-Length: ' . filesize($file));
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Expires: 0');

    // Read and output the file
    readfile($file);
    exit;
} else {
    echo 'File not found.';
}



// Open a file for reading
$file = fopen("example.txt", "r");

// Check if the file was opened successfully
if ($file) {
    echo "File opened successfully.<br>";

    // Read and output each line until the end of the file
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }

    // Close the file pointer
    fclose($file);
    echo "File closed.<br>";
} else {
    // Failed to open the file
    echo "Failed to open the file.<br>";
}

// Write to a file
$writeFile = fopen("output.txt", "w");
if ($writeFile) {
    $bytesWritten = fwrite($writeFile, "Hello, World!\n");
    echo "Bytes written: $bytesWritten<br>";
    fclose($writeFile);
    echo "Write file closed.<br>";
} else {
    echo "Failed to open write file.<br>";
}

// Check if a file exists
$filename = "example.txt";
if (file_exists($filename)) {
    echo "File $filename exists.<br>";
} else {
    echo "File $filename does not exist.<br>";
}

?>

