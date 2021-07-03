<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
$unserialized = unserialize($converted);
print_r($unserialized);
?>