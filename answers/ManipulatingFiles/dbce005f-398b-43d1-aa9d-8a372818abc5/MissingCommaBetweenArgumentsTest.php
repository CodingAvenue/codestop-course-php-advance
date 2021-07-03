<?php
function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile($fileToRead) or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile, $myCopiedFile);
readFileContent($myCopiedFile);
?>