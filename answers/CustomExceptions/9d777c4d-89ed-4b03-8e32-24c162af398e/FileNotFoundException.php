<?php
class FileNotFoundException extends Exception 
{
    public function getErrorMessage()
    {
        return $this->getMessage();
    }
}
?>