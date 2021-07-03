<?php
include_once __DIR__ . '/MyShape.php';

class Circle implements MyShape
{
    const PI = 3.14159;
    private $radius;
	
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
	
    public function calculateArea()
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
        return self::PI * $this->radius * $this->radius;
    }
}
?>