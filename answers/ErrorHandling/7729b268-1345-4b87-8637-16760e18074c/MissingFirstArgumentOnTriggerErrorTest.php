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

echo divide(10, 0);
?>