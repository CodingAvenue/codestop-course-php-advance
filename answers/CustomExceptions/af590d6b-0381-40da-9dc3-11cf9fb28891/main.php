<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    }

        return ($dividend / $divisor);
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>