<?php
function renameFile($fileToRename, $newName)
{
   rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
echo readlink(__DIR__ . "/myRenamedDocument.txt");
?>