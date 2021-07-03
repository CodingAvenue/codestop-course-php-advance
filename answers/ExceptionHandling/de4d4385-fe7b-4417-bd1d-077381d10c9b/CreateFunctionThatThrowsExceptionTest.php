<?php
function openFile($file)
{
    if (!file_exists($file)) {
        throw new Exception("Sorry, the file does not exist");
    } else {
        fopen($file, "w");
    }
}

try {
    openFile("myTest.txt");
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage() . " in " . $e->getFile() . " on line number " . $e->getLine();
}
?>