<?php
class Animal
{
    private $type = "Dog";
    private $age;

    public function __construct($type, $age)
    {
        $this->type = $type;
        if ($this->isValid($age)) {
            $this->age = $age;
        }
    }

    private function isValid($value)
    {
        if ($value > 0) {
            return true;
        }
        return false;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function display()
    {
        echo "The " . $this->getType() . " is " . $this->getAge() . " years old.";
    }
}

$pet = new Animal('Cat', 3);
$pet->display();
$converted = serialize($pet);
echo "The serialized object is: " . $converted . "\n";
$petObject = unserialize($converted);
$petObject->display();
?>