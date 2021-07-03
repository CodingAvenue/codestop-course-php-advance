<?php
require_once __DIR__ . '/MyShape.php';

class Square implements MyShape
{
    private $side;
	
    public function __construct($side)
    {
        $this->side = $side;
    }
	
    public function calculateArea()
    {
        //The formula to calculate the area of a square is: (s^2)
        return $this->side * $this->side;
    }
}
?>