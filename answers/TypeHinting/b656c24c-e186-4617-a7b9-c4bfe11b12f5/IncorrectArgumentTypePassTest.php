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

$person = new Person();
$person->setName("Anna");
echo "Person name: " . $person->getName();
?>