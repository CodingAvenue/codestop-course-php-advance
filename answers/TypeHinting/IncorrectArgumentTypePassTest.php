<?php
declare(strict_types = 1);

class Person 
{
    protected $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}

$personObject = new Person();
$personObject->setName("Anna");
echo "Person name: " . $personObject->getName();
?>