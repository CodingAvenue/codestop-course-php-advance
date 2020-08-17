<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>