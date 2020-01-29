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

$personObject = new Person();
$personObject->setName("Anna");
echo "Person name: " . $personObject->getName();
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `Anna`.

 - It prints `$name`.

 - It prints `Person`.

 - It prints `$personObject`.

 - It prints `Person name: Anna`.


/// type=SS, answer=[3]

Which of the following is a class?

 - `Anna`

 - `$name`

 - `Person`

 - `getName()`

 - `$personObject`


/// type=SS, answer=[2]

Which of the following is a property?

 - `Anna`

 - `$name`

 - `Person`

 - `getName()`

 - `$personObject`


/// type=MS, answer=[3,4]

Which of the following are methods?

 - `$name`

 - `Person`

 - `setName()`

 - `getName()`

 - `$personObject`


/// type=SS, answer=[4]

In the statement `declare(strict_types = 1);` on line 2, what is `declare`?

 - It is a keyword.

 - It is a directive.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=SS, answer=[2]

In the statement `declare(strict_types = 1);` on line 2, what is `strict_types`?

 - It is a keyword.

 - It is a directive.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=SS, answer=[2]

On line 2, what does `declare(strict_types = 1);` do?

 - It sets the value `1` as a default type declaration.

 - It enables strict type mode validations within the file.

 - It creates the `declare()` method of the `Person` class.

 - It declares the `strict_types` property of the `Person` class.

 - It applies type declarations to methods of the `Person` class.


/// type=SS, answer=[3]

In the method declaration `public function setName(string $name){}` on line 8, what is `string`?

 - It is a keyword.

 - It is a directive.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=SS, answer=[2]

In the method declaration `public function setName(string $name){}` on line 8, what is `$name`?

 - It is a keyword.

 - It is a parameter.

 - It is a data type.

 - It is a construct.

 - It is an operator.


/// type=MS, answer=[3,5]

In the method declaration `public function setName(string $name){}` on line 8, what does `string $name` do?

 - It calls the `$name` property of the `Person` class.

 - It defines the `$name` property of the `Person` class.

 - It sets the data type of the `$name` parameter to `string`.

 - It creates the `$name` parameter of the `setName()` method.

 - It enables the `setName()` method to only accept values of type `string` as an argument.


/// type=MS, answer=[2,5]

Which statements correctly describe the `setName()` method of the `Person` class?

 - It is accessible only within the `Person` class.

 - It only accepts a value of type `string` as an argument.

 - It only returns a value of type `string` when it is called.

 - It is not accessible by any instance of the `Person` class.

 - It sets a value of the `$name` property of the `Person` class.


/// type=MS, answer=[1,3]

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

$personObject = new Person("John");
$myCar = new Car($personObject);
print_r($myCar);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It prints `$myCar`.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => John )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.


/// type=MS, answer=[1,3]

Which of the following are classes?

 - `Car`

 - `$myCar`

 - `Person`

 - `$personObject`

 - `__construct()`


/// type=MS, answer=[2,4]

Which of the following are objects?

 - `Car`

 - `$myCar`

 - `Person`

 - `$personObject`

 - `__construct()`


/// type=MS, answer=[3,4]

Which of the following are type declarations?

 - `$name`

 - `$myCar`

 - `string $name`

 - `Person $driver`

 - `protected $name;`


/// type=SS, answer=[2]

Which statement best describes `declare(strict_types = 1);` on line 2?

 - It sets the value `1` as a default type declaration.

 - It enables strict type mode validations within the file.

 - It creates the `declare()` method of the `Person` class.

 - It declares the `strict_types` property of the `Person` class.

 - It applies type declarations to methods of the `Person` class.


/// type=SS, answer=[1]

In the method declaration `public function __construct(Person $driver)(){}` on line 28, what is `Person`?

 - It is a class.

 - It is a construct.

 - It is a data type.

 - It is a parameter.

 - It is an argument.


/// type=MS, answer=[3,5]

In the method declaration `public function __construct(Person $driver)(){}` on line 28, what does `Person $driver` do?

 - It calls the `$driver` property of the `Car` class.

 - It defines the `$name` property of the `Person` class.

 - It sets the type of the `$driver` parameter to `Person Object`.

 - It creates the `$driver` parameter of the `__construct()` method.

 - It enables the `__construct()` method to only accept values of type `Object` as an argument.


/// type=MS, answer=[2,4]

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

$personObject = new Person("John");
$myCar = new Car($personObject);
print_r($myCar);
?>
```
/// type=SS, answer=[2]

In the statement `$personObject = new Person("John");` on line 34, replace the argument `"John"` with `45.786`. Execute the program. What is its output?

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

$personObject = new Person(45.786);
$myCar = new Car($personObject);
print_r($myCar);
?>
```
/// type=MS, answer=[4,5]

Why does the statement `$personObject = new Person(45.786);` on line 34 produce an error?

 - There is no semicolon `;` at the end of the statement on line 34.

 - There is no `new` keyword specified before `Person(45.786)` on line 34.

 - On line 34, the argument `45.786` is not enclosed in double quotes `""`.

 - The `__construct()` method of the `Person` class only accepts an argument of type `string`.

 - In the statement `$personObject = new Person(45.786);` on line 34, the argument `45.786` is invalid.


/// type=SS, answer=[2]

Remove the statement `$personObject = new Person(45.786);` on line 34. Execute the program. What is its output?

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


$myCar = new Car($personObject);
print_r($myCar);
?>
```
/// type=SS, answer=[2]

In the satement `$myCar = new Car($personObject);` on line 35, replace `$personObject` with `"John"`. Execute the program. What is its output?

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
/// type=MS, answer=[4,5]

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
/// type=SS, answer=[5]

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

/// type=MS, answer=[2,4,5]

Which statements are true about type hinting?

 - It defines the parameter of a function.

 - It is referred to as `type declarations`.

 - It enables strict type mode validations within the file.

 - It sets a specific data type of the parameter in a function declaration. 

 - It enables a function to specify the data type of a value that an argument accepts.


/// type=SS, answer=[3]

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

$personObject = new Person();
$personObject->setName(45);
echo "Person name: " . $personObject->getName();
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `Anna`.

 - It produces an error.

 - No output is displayed.

 - It prints `$personObject`.

 - It prints `Person name: Anna`.


/// type=SS, answer=[3]

What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, integer given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 19.

 - On line 20, the argument `45` is not enclosed in double quotes `""`.

 - On line 20, the argument `45` in the `setName()` method call is invalid.

 - On line 20, the statement `$personObject->setName(45);` is invalid.

 - The `setName()` method of the `Person` class only accepts an argument of type `string`.

:::


/// type=CR, answer=[tests/TypeHinting/IncorrectArgumentTypePassTest.php]

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

$personObject = new Person();
$personObject->setName(45);
echo "Person name: " . $personObject->getName();
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

$personObject = new Person();
$personObject->setName();
echo "Person name: " . $personObject->getName();
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 19.

 - There is no semicolon `;` at the end of the statement on line 20.

 - On line 20, the statement `$personObject->setName();` is invalid.

 - There is no argument specified in the `setName()` method call on line 20.

 - The `setName()` method of the `Person` class requires an argument of type `string`.

:::


/// type=CR, answer=[tests/TypeHinting/NoArgumentSpecifiedOnMethodTest.php]

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

$personObject = new Person();
$personObject->setName();
echo "Person name: " . $personObject->getName();
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

$personObject = new Person();
$myCar = new Car($personObject);
print_r($myCar);
?>
```
/// type=SS, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `Car Object ( [driver:protected])`.

 - It prints `Person Object ( [name:protected] => John )`.

 - It prints `Car Object ( [driver:protected] => Person Object ( [name:protected] => John ) )`.


/// type=SS, answer=[4]

What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 34.

 - There is no `new` keyword specified before `Person()` on line 34.

 - There is no semicolon `;` at the end of the statement on line 34.

 - On line 34, the statement `$personObject = new Person();` is invalid.

 - The `__construct()` method of the `Person` class requires an argument of type `string`.

:::


/// type=CR, answer=[tests/TypeHinting/NoArgumentSpecifiedOnPersonTest.php]

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

$personObject = new Person();
$myCar = new Car($personObject);
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

$personObject =  Person("John");
$myCar = new Car($personObject);
print_r($myCar);
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - There is no argument specified in `Person()` on line 34.

 - There is no semicolon `;` at the end of the statement on line 34.

 - There is no `new` keyword specified before `Person("John")` on line 34.

 - On line 34, the statement `$personObject =  Person("John");` is invalid.

 - The `__construct()` method of the `Person` class requires an argument of type `string`.


:::


/// type=CR, answer=[tests/TypeHinting/MissingNewKeywordTest.php]

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

$personObject =  Person("John");
$myCar = new Car($personObject);
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

$personObject = new Person("John");
$myCar = new Car("$personObject");
print_r($myCar);
?>
```
/// type=MS, answer=[2,5]

Execute the program. What are the error messages?

 - Uncaught Error: Call to undefined function `Person()` on line number 34

 - Object of class `Person` could not be converted to string on line number 35

 - Uncaught TypeError: Argument `1` passed to `Person::setName()` must be of the type string, none given, called on line 20 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Person::__construct()` must be of the type string, none given, called on line 34 and defined on line number 8

 - Uncaught TypeError: Argument `1` passed to `Car::__construct()` must be an instance of Person, string given, called on line 35 and defined on line number 28


/// type=MS, answer=[2,3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 34.

 - On line 35, the argument `$personObject` is enclosed in double quotes `""`.

 - On line 35, the statement `$myCar = new Car("$personObject");` is invalid.

 - There is no `new` keyword specified before `Car("$personObject")` on line 35.

 - The `__construct()` method of the `Car` class requires an argument of type `Object`.

:::


/// type=CR, answer=[tests/TypeHinting/RemoveUnwantedDoubleQuotesTest.php]

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

$personObject = new Person("John");
$myCar = new Car("$personObject");
print_r($myCar);
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/TypeHinting/CreateMethodsWithTypeDeclarationsTest.php]

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