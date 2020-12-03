### Facts for Type Hinting lesson:

Type hinting enables a function to specify the data type of a value that an argument accepts. It is also referred to as `type declaration` that sets a specific data type of the parameter in a function declaration. 

To create a `type declaration`, add the data type name before the parameter name.

The `declare` construct with the `strict_types` directive is used to enable strict type mode validation in PHP.

Code:

```php
<?php
declare(strict_types = 1);

class Person 
{
  protected $name;
  protected $age;

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setAge(int $newAge)
  {
    $this->age = $newAge;
  }   

  public function getName() : string
  {
    return $this->name;
  }

  public function getAge() : int
  {
    return $this->age;
  }
}

$personObject = new Person();
$personObject->setAge(10);
echo "Age: " . $personObject->getAge();
?>
```

Output:

```
Age: 10
```

In the above example, the code breaks down as follows:

 - `declare(strict_types = 1);` defines strict type validation that any type mismatch should be reported as an error.

 - `public function setName(string $name) {}` sets the data type of the `$name` parameter to string. It enforces the `setName()` method to only accept a string value as argument.

 - `public function getAge() : int {}` sets the `getAge()` method to return an integer data type.
