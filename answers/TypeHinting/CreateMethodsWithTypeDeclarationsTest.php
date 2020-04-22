<?php
declare(strict_types = 1);

class Animal 
{
    private $type = "Dog";
    private $age;

    public function __construct(string $type, int $age)
    {
        $this->type = $type;
        if ($this->isValid($age)) {
            $this->age = $age;
        }
    }

    private function isValid(int $value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }

    public function setAge(int $newAge)
    {
        if ($this->isValid($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getType()
    {
        return $this->type;
    }

    public function display()
    {
        echo "The " . $this->getType() . " is " . $this->getAge() . " years old.";
    }
}

$pet = new Animal("Cat", 3);
$pet->display();
?>