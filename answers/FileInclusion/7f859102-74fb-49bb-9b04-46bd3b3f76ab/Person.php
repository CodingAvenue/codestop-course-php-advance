<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>