<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

$file = __DIR__ . "/testDocument.txt";
readFileContent($file);
?> 