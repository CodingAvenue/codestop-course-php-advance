<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die("divide(): The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>