<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo divide(10, 0);
?>