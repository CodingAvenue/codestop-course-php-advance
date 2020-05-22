# Type Hinting

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
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
```
/// type=SS, id=6b2aa433-5358-4fed-ab33-b8f900a0859b, answer=[5]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `$name`.

 - It prints `Person`.

 - It prints `$person`.

 - It prints `Person name: Anna`.


/// type=SS, id=350750fd-205b-4b27-b1ce-36b59cdde86f, answer=[3]

Which of the following is a class?

 - `Anna`

 - `$name`

 - `Person`

 - `$person`

 - `getName()`


/// type=SS, id=fc344a68-1a88-4830-b953-360d84ed400d, answer=[2]

Which of the following is a property?

 - `Anna`

 - `$name`

 - `Person`

 - `$person`

 - `getName()`


/// type=MS, id=92011981-3bc5-4bd5-bc21-0f56857afed2, answer=[4,5]

Which of the following are methods?

 - `$name`

 - `Person`

 - `$person`

 - `setName()`

 - `getName()`


/// type=SS, id=af8c2761-83f4-41eb-b37f-a2dc224a2261, answer=[4]

In the statement `declare(strict_types = 1);` on line 2, what is `declare`?

 - It is a keyword.

 - It is a directive.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=SS, id=a7366c32-376a-4295-b872-6b9b6489b6fc, answer=[2]

In the statement `declare(strict_types = 1);` on line 2, what is `strict_types`?

 - It is a keyword.

 - It is a directive.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=SS, id=23d532c0-d8ac-4efa-824c-10779ecba445, answer=[2]

On line 2, what does `declare(strict_types = 1);` do?

 - It sets the value `1` as a default type declaration.

 - It enables strict type mode validations within the file.

 - It creates the `declare()` method of the `Person` class.

 - It declares the `strict_types` property of the `Person` class.

 - It applies type declarations to methods of the `Person` class.


/// type=SS, id=a8a1a5cf-c755-4a2e-94b4-44badc82e9c3, answer=[3]

In the method declaration `public function setName(string $name){}` on line 8, what is `string`?

 - It is a keyword.

 - It is a directive.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=SS, id=9084ed22-2c00-4635-abc5-1dac7491cecb, answer=[2]

In the method declaration `public function setName(string $name){}` on line 8, what is `$name`?

 - It is a keyword.

 - It is a parameter.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=MS, id=99b8cd12-60c5-40ea-88ab-928efb083348, answer=[3,5]

In the method declaration `public function setName(string $name){}` on line 8, what does `string $name` do?

 - It calls the `$name` property of the `Person` class.

 - It defines the `$name` property of the `Person` class.

 - It sets the data type of the `$name` parameter to `string`.

 - It creates the `$name` parameter of the `setName()` method.

 - It enables the `setName()` method to only accept values of type `string` as an argument.


/// type=MS, id=2ef9b03a-5b3f-4e82-89cf-3b94b8e81ce5, answer=[2,5]

Which statements correctly describe the `setName()` method of the `Person` class?

 - It is accessible only within the `Person` class.

 - It only accepts a value of type `string` as an argument.

 - It only returns a value of type `string` when it is called.

 - It is not accessible by any instance of the `Person` class.

 - It sets a value of the `$name` property of the `Person` class.


/// type=MS, id=5493b532-c275-4943-8e74-36e6932c0106, answer=[1,3]

Which statements correctly describe the `getName()` method of the `Person` class?

 - It does not require an argument.

 - It only accepts a value of type `string` as an argument.

 - It only returns a value of type `string` when it is called.

 - It is not accessible by any instance of the `Person` class.

 - It sets a value of the `$name` property of the `Person` class.

:::


:::

/// type=REPL, readonly=true

```php
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
```
/// type=SS, id=de0b605b-2c4a-40ed-b37c-0887d0a13f51, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It prints `$myCar`.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => John )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.


/// type=MS, id=17c6183c-9769-41bb-a9ee-ca109907e238, answer=[1,3]

Which of the following are classes?

 - `Car`

 - `$myCar`

 - `Person`

 - `$person`

 - `__construct()`


/// type=MS, id=188355a9-b781-487a-9c28-ca112f974100, answer=[2,4]

Which of the following are objects?

 - `Car`

 - `$myCar`

 - `Person`

 - `$person`

 - `__construct()`


/// type=MS, id=33a6c531-cde2-42db-96fe-922569ae1e17, answer=[3,4]

Which of the following are type declarations?

 - `$name`

 - `$myCar`

 - `string $name`

 - `Person $driver`

 - `protected $name;`


/// type=SS, id=46612363-7956-414a-9f05-119dbd81eead, answer=[2]

Which statement best describes `declare(strict_types = 1);` on line 2?

 - It sets the value `1` as a default type declaration.

 - It enables strict type mode validations within the file.

 - It creates the `declare()` method of the `Person` class.

 - It declares the `strict_types` property of the `Person` class.

 - It applies type declarations to methods of the `Person` class.


/// type=SS, id=8b4c1606-75c7-49a8-b820-02de2b43e415, answer=[1]

In the method declaration `public function __construct(Person $driver)(){}` on line 28, what is `Person`?

 - It is a class.

 - It is a construct.

 - It is a data type.

 - It is a parameter.

 - It is an argument.


/// type=MS, id=5d737256-a8f9-48ca-8ca8-ede38a31ff38, answer=[3,5]

In the method declaration `public function __construct(Person $driver)(){}` on line 28, what does `Person $driver` do?

 - It calls the `$driver` property of the `Car` class.

 - It defines the `$name` property of the `Person` class.

 - It sets the type of the `$driver` parameter to `Person Object`.

 - It creates the `$driver` parameter of the `__construct()` method.

 - It enables the `__construct()` method to only accept values of type `Object` as an argument.


/// type=MS, id=b1770333-10c5-4def-a97e-64b989a7ef21, answer=[2,4]

Which statements correctly describe the `__construct()` method of the `Car` class?

 - It is accessible only within the `Car` class.

 - It sets the value of the `Car` class property `$driver`.

 - It is not accessible by any instance of the `Car` class.

 - It only accepts a value of type `Object` as an argument.

 - It only returns a value of type `Object` when it is called.

:::


:::

/// type=REPL

```php
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
```
/// type=SS, id=5f08a9e1-d009-43bc-914c-89baff3cbaee, answer=[2]

In the statement `$person = new Person("John");` on line 34, replace the argument `"John"` with `45.786`. Execute the program. What is its output?

 - It prints `45.786`.

 - It produces an error.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => 45.786 )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => 45.786 ) )`.

:::


:::

/// type=REPL

```php
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

$person = new Person(45.786);
$myCar = new Car($person);
print_r($myCar);
?>
```
/// type=MS, id=8559baa0-96b0-4245-97d0-57bccd8b990d, answer=[4,5]

Why does the statement `$person = new Person(45.786);` on line 34 produce an error?

 - There is no semicolon `;` at the end of the statement on line 34.

 - There is no `new` keyword specified before `Person(45.786)` on line 34.

 - On line 34, the argument `45.786` is not enclosed in double quotes `""`.

 - The `__construct()` method of the `Person` class only accepts an argument of type `string`.

 - In the statement `$person = new Person(45.786);` on line 34, the argument `45.786` is invalid.


/// type=SS, id=0bcd96e1-dee4-498a-9cdb-d82595a421e3, answer=[2]

Remove the statement `$person = new Person(45.786);` on line 34. Execute the program. What is its output?

 - It prints `45.786`.

 - It produces an error.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => 45.786 )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => 45.786 ) )`.

:::


:::

/// type=REPL

```php
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


$myCar = new Car($person);
print_r($myCar);
?>
```
/// type=SS, id=34c7c488-da1a-4f30-a508-54dcae259c9d, answer=[2]

In the satement `$myCar = new Car($person);` on line 35, replace `$person` with `"John"`. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => John )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.

:::


:::

/// type=REPL

```php
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


$myCar = new Car("John");
print_r($myCar);
?>
```
/// type=MS, id=018e01b3-684c-464f-a1e9-4e78fff61a2f, answer=[4,5]

Why does the statement `$myCar = new Car("John");` on line 35 produce an error?

 - There is no semicolon `;` at the end of the statement on line 34.

 - On line 35, the argument `John` is enclosed in double quotes `""`.

 - There is no `new` keyword specified before `Car("John")` on line 35.

 - The `__construct()` method of the `Car` class only accepts an argument of type `Object`.

 - In the statement `$myCar = new Car("John");` on line 35, the argument `John` is invalid.

:::


:::

/// type=REPL

```php
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

$myCar = new Car("John");
print_r($myCar);
?>
```
/// type=SS, id=b8c2622b-362a-4ab3-ad1e-a853bcc6dd35, answer=[5]

In the statement `$myCar = new Car("John");` on line 34, replace `"John"` with `new Person("John")`. Execute the program. What is its output?

 - It prints `John`.

 - It produces an error.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => John )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.

:::

+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=0e2867c7-de2c-4bfc-897e-dc59c8f1891b, answer=[2,4,5]

Which statements are true about type hinting?

 - It defines the parameter of a function.

 - It is referred to as `type declarations`.

 - It enables strict type mode validations within the file.

 - It sets a specific data type of the parameter in a function declaration. 

 - It enables a function to specify the data type of a value that an argument accepts.


/// type=SS, id=4ebd0cda-d2fc-46c5-b928-260a386fd43f, answer=[3]

What does `declare(strict_types = 1)` do?

 - It defines the parameter of a function.

 - It is referred to as `type declarations`.

 - It enables strict type mode validations within the file.

 - It sets a specific data type of the parameter in a function declaration. 

 - It enables a function to specify the data type of a value that an argument accepts.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
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
$person->setName(45);
echo "Person name: " . $person->getName();
?>
```
/// type=SS, id=6dea5b36-980f-4818-bc13-0c5384be371f, answer=[3]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `$person`.

 - It produces an error.

 - No output is displayed.

 - It prints `Person name: Anna`.


/// type=SS, id=7fdbb116-269a-479f-b9dd-ffc2ae37a73a, answer=[3]

What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, integer given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, id=3bb8fd1b-5f25-4cd0-bd02-843a6d40b962, answer=[2,4,5]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 19.

 - On line 20, the statement `$person->setName(45);` is invalid.

 - On line 20, the argument `45` is not enclosed in double quotes `""`.

 - On line 20, the argument `45` in the `setName()` method call is invalid.

 - The `setName()` method of the `Person` class only accepts an argument of type `string`.

:::


/// type=CR, id=b656c24c-e186-4617-a7b9-c4bfe11b12f5, answer=[tests/TypeHinting/b656c24c-e186-4617-a7b9-c4bfe11b12f5]

Correct the code so that it outputs the string `Person name: Anna`.

```php
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
$person->setName(45);
echo "Person name: " . $person->getName();
?>
```


:::

/// type=REPL, readonly=true

```php
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
$person->setName();
echo "Person name: " . $person->getName();
?>
```
/// type=SS, id=f194bb8c-a825-4c2f-a852-f8db16421030, answer=[3]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, id=864eac27-7af3-46e5-a992-0b63b1d3450a, answer=[2,4,5]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 19.

 - On line 20, the statement `$person->setName();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 20.

 - There is no argument specified in the `setName()` method call on line 20.

 - The `setName()` method of the `Person` class requires an argument of type `string`.

:::


/// type=CR, id=661b296f-e22f-4ff3-82d3-c26182e75f51, answer=[tests/TypeHinting/661b296f-e22f-4ff3-82d3-c26182e75f51]

Correct the code so that it outputs the string `Person name: Anna`.

```php
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
$person->setName();
echo "Person name: " . $person->getName();
?>
```


:::

/// type=REPL, readonly=true

```php
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

$person = new Person();
$myCar = new Car($person);
print_r($myCar);
?>
```
/// type=SS, id=0578c836-f02e-461d-8188-e29948714cc7, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => John )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.


/// type=SS, id=2fe9bd08-23d2-4e6f-a668-a835049eaad5, answer=[4]

What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, id=85110dfc-9125-476f-9fcf-5e2066121a3e, answer=[1,4,5]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 34.

 - There is no `new` keyword specified before `Person()` on line 34.

 - There is no semicolon `;` at the end of the statement on line 34.

 - On line 34, the statement `$person = new Person();` is invalid.

 - The `__construct()` method of the `Person` class requires an argument of type `string`.

:::


/// type=CR, id=fb3985c4-84b5-400a-a81a-1a0c18f0ba91, answer=[tests/TypeHinting/fb3985c4-84b5-400a-a81a-1a0c18f0ba91]

Correct the code so that it outputs the string `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.

```php
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

$person = new Person();
$myCar = new Car($person);
print_r($myCar);
?>
```


:::

/// type=REPL, readonly=true

```php
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

$person =  Person("John");
$myCar = new Car($person);
print_r($myCar);
?>
```
/// type=SS, id=1878fc42-7ab7-423b-ba57-6a583bae6e24, answer=[1]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, id=644b5ef9-87e8-456f-a547-908a2f1b775c, answer=[3,4]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 34.

 - There is no semicolon `;` at the end of the statement on line 34.

 - On line 34, the statement `$person =  Person("John");` is invalid.

 - There is no `new` keyword specified before `Person("John")` on line 34.

 - The `__construct()` method of the `Person` class requires an argument of type `string`.


:::


/// type=CR, id=7274abcb-3f4a-4923-ae26-3eb80549c328, answer=[tests/TypeHinting/7274abcb-3f4a-4923-ae26-3eb80549c328]

Correct the code so that it outputs the string `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.

```php
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

$person =  Person("John");
$myCar = new Car($person);
print_r($myCar);
?>
```


:::

/// type=REPL, readonly=true

```php
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
$myCar = new Car("$person");
print_r($myCar);
?>
```
/// type=MS, id=7843c3ff-5f2c-4da4-acb7-bc1352d089ba, answer=[2,5]

Execute the program. What are the error messages?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, id=de501e39-2e0e-44f9-ba21-389bf2cc1884, answer=[2,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 34.

 - On line 35, the argument `$person` is enclosed in double quotes `""`.

 - There is no `new` keyword specified before `Car("$person")` on line 35.

 - On line 35, the statement `$myCar = new Car("$person");` is invalid.

 - The `__construct()` method of the `Car` class requires an argument of type `Object`.

:::


/// type=CR, id=9f3f7717-408f-424c-9a55-cd19f336de8c, answer=[tests/TypeHinting/9f3f7717-408f-424c-9a55-cd19f336de8c]

Correct the code so that it outputs the string `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.

```php
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
$myCar = new Car("$person");
print_r($myCar);
?>
```


+++


+++

### Part 4: Practice

/// type=CR, id=328d8314-835a-4a17-b78a-8daf068fffbf, answer=[tests/TypeHinting/328d8314-835a-4a17-b78a-8daf068fffbf]

Write a program that adds type declarations to methods of a certain class. First, add a statement `declare(strict_types = 1);` after the `<?php` tag. Then, use a `class` keyword to declare a class named `Animal`. Within the curly braces `{}`, add the following statements:

 1. A property definition of a class property `$type` with the value `Dog` using the `private` visibility keyword. 

 2. Use the `private` visibility keyword to define another class property named `$age`. 

 3. A `__construct()` method with type declarations `string $type` and `int $age` as parameters. Inside the `__construct()` method body, add a statement that assigns the value of `$type` to the `$type` property of the `Animal` class. Then, add an `if` statement that evaluates `$age` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$age` to the `$age` property of the `Animal` class. 

 4. After the `__constuct()` method definition, add a `private` method named `isValid()` with a type declaration `int $value` as a parameter. Inside the `isValid()` method body, add an `if` statement that returns `true` if `$value` is greater than `0` and `false` otherwise. 

 5. A `public` method named `display()`. Inside the `display()` method body, add an `echo` statement to display the string `"The " . $this->getType() . " is " . $this->getAge() . " years old."`.

 6. A `public` method named `getType()`. Inside the `getType()` method body, add a statement that returns the value of the `$type` property.

 7. A `public` method named `getAge()`. Inside the `getAge()` method body, add a statement that returns the value of the `$age` property.

 8. A `public` method named `setAge()` with a type declaration `int $newAge` as a parameter. Inside the `setAge()` method body, add an `if` statement that evaluates `$newAge` using the `isValid()` method. Inside the `if` block, add a statement that assigns `$newAge` to the `$age` property of the `Animal` class.

After the class declaration, add a statement that creates the `$pet` object an instance of the `Animal` class passing the arguments `Cat` and `3`. Then, add another statement that calls the `display()` method of the `$pet` object. Run the program to view the output.

```php
<?php


?>
```

+++