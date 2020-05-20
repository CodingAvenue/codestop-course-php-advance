<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo divide(10, 0);
?>