<?php
function openFile($file)
{
    if (!file_exists($file)) {
        trigger_error("Sorry, the file does not exist", E_USER_ERROR);
    } else {
        fopen($file, "w");
    }
}

function myTestErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in " . $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler("myTestErrorHandler");
echo openFile("myTest.txt");
?>