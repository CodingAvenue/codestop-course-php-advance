<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

$file = __DIR__ . "/testDocument.txt";
$copyHere = __DIR__ . '/myCopiedFile.txt';
copyFile($file, $copyHere);
readFileContent($copyHere);
?>