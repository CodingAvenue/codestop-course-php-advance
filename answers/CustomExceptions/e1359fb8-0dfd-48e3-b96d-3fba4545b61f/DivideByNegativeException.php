<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>