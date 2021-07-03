<?php
function readContent($file)
{
    $fileToRead = fopen($file, "r") or die("Unable to open the file.");

    while(!feof($fileToRead)) {
        echo fgets($fileToRead) . "<br>";
    }

    fclose($fileToRead);
}

function replaceContent($file, $newContent)
{
    $fileToUpdate = fopen($file, "w") or die("Unable to open the file.");

    fwrite($fileToUpdate, $newContent);
}

$myFile = __DIR__ . "/testDocument.txt";
$myNewContent = "This is a new file content.\n";
replaceContent($myFile, $myNewContent);
readContent($myFile);
?> 