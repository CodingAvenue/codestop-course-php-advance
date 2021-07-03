<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 