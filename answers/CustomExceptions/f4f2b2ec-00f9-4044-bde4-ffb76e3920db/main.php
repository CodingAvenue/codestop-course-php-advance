<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>