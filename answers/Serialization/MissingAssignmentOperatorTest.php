<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
echo "serialized numbers:" . $converted;
?>