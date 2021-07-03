<?php
require_once(__DIR__ . "/FileNotFoundException.php");

function openFile($file)
{
    if (!file_exists($file)) {
        throw new FileNotFoundException("Sorry, the file does not exist");
    } else {
        fopen($file, "w");
    }
}

try {
    openFile("myTest.txt");
} catch (FileNotFoundException $fe) {
    echo "Exception caught: " . $fe->getErrorMessage() . " in " . $fe->getFile() . " on line number " . $fe->getLine();
}
?>