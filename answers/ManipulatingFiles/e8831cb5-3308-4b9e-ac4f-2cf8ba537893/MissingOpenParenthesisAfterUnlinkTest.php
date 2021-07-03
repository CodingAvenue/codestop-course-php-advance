<?php
function renameFile($fileToRename, $newName)
{
    rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

function deleteFile($fileToDelete)
{
    if (!unlink($fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
$newFile = __DIR__ . "/myRenamedDocument.txt";
deleteFile($newFile);
?>