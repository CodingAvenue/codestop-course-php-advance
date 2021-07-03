<?php
function changeFileName($oldFile, $newName)
{
    rename($oldFile, $newName) or die("Unable to rename the file.");
}

function readFileContent($file)
{
    readfile($file) or die("Unable to read the file.");
}

function deleteFile($fileToDelete)
{
    if (!unlink($fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$myFile = __DIR__ . "/myTestDocument.txt";
changeFileName($myFile, "myPracticeDocument.txt");
$myNewFile = __DIR__ . "/myPracticeDocument.txt";
readFileContent($myNewFile);
deleteFile($myNewFile);
?>