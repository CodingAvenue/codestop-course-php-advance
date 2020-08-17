<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>