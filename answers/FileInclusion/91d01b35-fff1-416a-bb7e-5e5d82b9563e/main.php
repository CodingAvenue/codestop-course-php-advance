<?php
require __DIR__ . '/Square.php';
include __DIR__ . '/Circle.php';

$circle = new Circle(2.5);
$square = new Square(2.5);
echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>