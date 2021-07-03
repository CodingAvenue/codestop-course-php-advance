<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>