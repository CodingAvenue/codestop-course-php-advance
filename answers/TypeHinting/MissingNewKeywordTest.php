<?php
declare(strict_types = 1);

class Person 
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}

class Car
{
    protected $driver;

    public function __construct(Person $driver)
    {
        $this->driver = $driver;
    }
}

$person = new Person("John");
$myCar = new Car($person);
print_r($myCar);
?>