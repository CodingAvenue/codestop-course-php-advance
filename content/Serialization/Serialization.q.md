# Serialization

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
echo "serialized numbers:" . $converted;
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `$counter`.

 - It produces an error.

 - No output is displayed.

 - It prints `serialized numbers:`.

 - It prints `serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.


/// type=MS, answer=[3,4,5]

Which of the following are variables?

 - `for`

 - `echo`

 - `$number`

 - `$counter`

 - `$converted`


/// type=SS, answer=[3]

Which of the following is an array?

 - `echo`

 - `$number`

 - `$myArray`

 - `$counter`

 - `$converted`


/// type=MS, answer=[1,2]

Which of the following are constructs?

 - `for`

 - `echo`

 - `$number`

 - `$counter`

 - `$converted`


/// type=SS, answer=[5]

In the statement `$converted = serialize($myArray);` on line 6, what is `$myArray`?

 - It is a value.

 - It is a function.

 - It is a construct.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=SS, answer=[2]

In the statement `$converted = serialize($myArray);` on line 6, what is `serialize()`?

 - It is a value.

 - It is a function.

 - It is a construct.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=SS, answer=[2]

In the statement `$converted = serialize($myArray);` on line 6, what is `$converted`?

 - It is a value.

 - It is a variable.

 - It is a function.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=MS, answer=[4,5]

In the statement `$converted = serialize($myArray);` on line 6, what does `serialize($myArray)` do?

 - It displays the values in the `$myArray` array.

 - It accesses the values in the `$myArray` array.

 - It removes the values from the `$myArray` array.

 - It converts the values in the `$myArray` array to string.

 - It returns the string representation of the values in the `$myArray` array.


/// type=SS, answer=[3]

What is the data type of `$converted`?

 - Array

 - Float

 - String

 - Integer

 - Boolean


/// type=MS, answer=[3,5]

Which statements correctly describe the code on line 6?

 - It accesses the values in the `$myArray` array.

 - It sets the value of `$converted` to `$myArray`.

 - It converts the values in the `$myArray` array to string.

 - It assigns the values in the `$myArray` array to `$converted`.

 - It assigns the string representation of the values in the `$myArray` array to `$converted`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
$unserialized = unserialize($converted);
print_r($unserialized);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `$myArray`.

 - It produces an error.

 - No output is displayed.

 - It prints `a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.

 - It prints `Array ( [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )` in separate lines.


/// type=MS, answer=[2,5]

Which of the following are arrays?

 - `$number`

 - `$myArray`

 - `$counter`

 - `$converted`

 - `$unserialized`


/// type=SS, answer=[3]

In the statement `$unserialized = unserialize($converted);` on line 7, what is `unserialize()`?

 - It is a value.

 - It is a variable.

 - It is a function.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=MS, answer=[4,5]

In the statement `$unserialized = unserialize($converted);` on line 7, what does `unserialize($converted)` do?

 - It displays the value of `$converted`.

 - It accesses the value of `$converted`.

 - It removes the value from `$converted`.

 - It returns the converted value of type array.

 - It converts the value of `$converted` back to an array.


/// type=MS, answer=[3,5]

Which statements correctly describe the code on line 7?

 - It accesses the value of `$converted`.

 - It sets the value of `$unserialized` to `$converted`.

 - It converts the value of `$converted` back to an array.

 - It assigns the value of `$converted` to `$unserialized`.

 - It assigns the converted values of type array to `$unserialized`.


/// type=SS, answer=[1]

On line 8, what does `print_r($unserialized);` do?

 - It prints the information stored in `$unserialized`.

 - It removes the information stored in `$unserialized`.

 - It accesses the information stored in `$unserialized`.

 - It converts the information stored in `$unserialized` to a string.

 - It converts the information stored in `$unserialized` to an array.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
print_r($worker);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `$id`.

 - It prints `Name`.

 - It prints `Accounting`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002)`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.


/// type=SS, answer=[2]

Which of the following is a class?

 - `$name`

 - `Worker`

 - `$worker`

 - `display()`

 - `__construct()`


/// type=MS, answer=[1,2,3]

Which of the following are properties?

 - `$id`

 - `$name`

 - `$dept`

 - `$worker`

 - `display()`


/// type=MS, answer=[4,5]

Which of the following are methods?

 - `$name`

 - `Worker`

 - `$worker`

 - `display()`

 - `__construct()`


/// type=SS, answer=[3]

Which of the following is an instance of the `Worker` class?

 - `$name`

 - `Worker`

 - `$worker`

 - `display()`

 - `__construct()`


/// type=SS, answer=[1]

On line 22, what does `print_r($worker);` do?

 - It prints the information stored in `$worker`.

 - It removes the information stored in `$worker`.

 - It accesses the information stored in `$worker`.

 - It converts the information stored in `$worker` to a string.

 - It converts the information stored in `$worker` to an array.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It produces an error.

 - It prints `W-1002', 'Charles Han', 'Accounting'`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002)`.

 - It prints `O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.


/// type=SS, answer=[5]

In the statement `$serializedWorker = serialize($worker);` on line 22, what is `$worker`?

 - It is a value.

 - It is a variable.

 - It is a function.

 - It is an argument of type array.

 - It is an argument of type object.


/// type=MS, answer=[4,5]

In the statement `$serializedWorker = serialize($worker);` on line 22, what does `serialize($worker)` do?

 - It displays the values in the `$worker` object.

 - It accesses the values in the `$worker` object.

 - It removes the values from the `$worker` object.

 - It converts the values in the `$worker` object to string.

 - It returns the string representation of the values in the `$worker` object.


/// type=MS, answer=[3,5]

Which statements correctly describe `$serializedWorker = serialize($worker);` on line 22?

 - It accesses the `$worker` object.

 - It sets the value of `$serializedWorker` to `$worker`.

 - It converts the values in the `$worker` object to string.

 - It assigns the values in the `$worker` object to `$serializedWorker`.

 - It assigns the string representation of the values in the `$worker` object to `$serializedWorker`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($serializedWorker);
print_r($unserializedWorker);
?>
```
/// type=MS, answer=[4,5]

Execute the program. What are its outputs?

 - It produces an error.

 - It prints `W-1002', 'Charles Han', 'Accounting'`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002)`.

 - It prints `O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.


/// type=MS, answer=[4,5]

Which statements correctly describe the `serialize()` function on line 22?

 - It displays the values in the `$worker` object.

 - It accesses the values in the `$worker` object.

 - It removes the values from the `$worker` object.

 - It converts the values in the `$worker` object to string.

 - It returns the string representation of the values in the `$worker` object.


/// type=MS, answer=[3,5]

Which statements correctly describe `$serializedWorker = serialize($worker);` on line 22?

 - It accesses the `$worker` object.

 - It sets the value of `$serializedWorker` to `$worker`.

 - It converts the values in the `$worker` object to string.

 - It assigns the values in the `$worker` object to `$serializedWorker`.

 - It assigns the string representation of the values in the `$worker` object to `$serializedWorker`.


/// type=SS, answer=[4]

In the statement `$unserializedWorker = unserialize($serializedWorker);` on line 25, what is `$serializedWorker`?

 - It is a value.

 - It is a variable.

 - It is an argument of type array.

 - It is an argument of type string.

 - It is an argument of type object.


/// type=MS, answer=[4,5]

In the statement `$unserializedWorker = unserialize($serializedWorker);` on line 25, what does `unserialize($serializedWorker)` do?

 - It displays the value of `$serializedWorker`.

 - It accesses the value of `$serializedWorker`.

 - It removes the value from `$serializedWorker`.

 - It returns the converted value of type object.

 - It converts the value of `$serializedWorker` back to type object.


/// type=MS, answer=[2,5]

Which statements correctly describe `$unserializedWorker = unserialize($serializedWorker);` on line 25?

 - It accesses the value of `$serializedWorker`.

 - It converts the value of `$serializedWorker` back to type object.

 - It sets the value of `$unserializedWorker` to `$serializedWorker`.

 - It assigns the value of `$serializedWorker` to `$unserializedWorker`.

 - It assigns the converted value of type object to `$unserializedWorker`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[5]

Which statement is true about serialization?

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes.

 - It enables a function to specify the data type of a value that an argument accepts.

 - It is a way to store information state and history of user activities in a certain application.

 - It is a process of converting any PHP values into a storable representation without losing their type and structure.


/// type=SS, answer=[1]

Which statement best describes the `serialize()` function?

 - It creates a byte-stream representation of a value.

 - It enables strict type mode validations within the file.

 - It collects form data submitted through the HTTP POST method.

 - It sets a specific data type of the parameter in a function declaration. 

 - It converts a byte-stream representation back to a specific PHP value.


/// type=SS, answer=[5]

Which statement best describes the `unserialize()` function?

 - It creates a byte-stream representation of a value.

 - It enables strict type mode validations within the file.

 - It collects form data submitted through the HTTP POST method.

 - It sets a specific data type of the parameter in a function declaration. 

 - It converts a byte-stream representation back to a specific PHP value.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted  serialize($myArray);
echo "serialized numbers:" . $converted;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `$counter`.

 - It produces an error.

 - No output is displayed.

 - It prints `serialized numbers:`.

 - It prints `serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.


/// type=SS, answer=[2]

What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 6.

 - On line 6, the argument `$myArray` is not enclosed in double quotes `""`.

 - On line 6, the statement `$converted  serialize($myArray);` is invalid.

 - There is no argument specified in the `serialize()` function call on line 6.

 - There is no assignment operator `=` between `$converted` and `serialize($myArray)` on line 6.

:::


/// type=CR, answer=[tests/Serialization/MissingAssignmentOperatorTest.php]

Correct the code so that it outputs the string `serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted  serialize($myArray);
echo "serialized numbers:" . $converted;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize();
echo "serialized numbers:" . $converted;
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - There are parentheses `()` after `serialize` on line 6.

 - There is no semicolon `;` at the end of the statement on line 6.

 - On line 6, the statement `$converted = serialize();` is invalid.

 - There is no argument specified in the `serialize()` function call on line 6.

 - There is no assignment operator `=` between `$converted` and `serialize()` on line 6.

:::


/// type=CR, answer=[tests/Serialization/MissingSerializeFunctionArgumentTest.php]

Correct the code so that it outputs the string `serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize();
echo "serialized numbers:" . $converted;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
$unserialized = unserialize($myArray);
print_r($unserialized);
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - The `unserialize()` function only accepts an argument of type string.

 - On line 6, the statement `$converted = serialize($myArray);` is invalid.

 - On line 6, the argument `$myArray` in the `serialize()` function call is invalid.

 - On line 7, the argument `$myArray` in the `unserialize()` function call is invalid.

 - On line 7, the statement `$unserialized = unserialize($myArray);` is invalid.

:::


/// type=CR, answer=[tests/Serialization/IncorrectArgumentTypeForUnserializeFunctionTest.php]

Correct the code so that it outputs `Array ( [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )` in separate lines.

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
$unserialized = unserialize($myArray);
print_r($unserialized);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
$unserialized = unserialize();
print_r($unserialized);
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, answer=[1,4]

Which statements correctly describe the error?

 - On line 7, the statement `$unserialized = unserialize();` is invalid.

 - There is no argument specified in the `serialize()` function call on line 6.

 - On line 6, the statement `$converted = serialize($myArray);` is invalid.

 - There is no argument specified in the `unserialize()` function call on line 7.

 - On line 6, the argument `$myArray` in the `serialize()` function call is invalid.

:::


/// type=CR, answer=[tests/Serialization/MissingArgumentTypeForUnserializeFunctionTest.php]

Correct the code so that it outputs `Array ( [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )` in separate lines.

```php
<?php
$number = 5;
for ($counter = 1; $counter <= $number; $counter++) {
    $myArray[$counter] = $counter;
}
$converted = serialize($myArray);
$unserialized = unserialize();
print_r($unserialized);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker(W-1002, 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($serializedWorker);
print_r($unserializedWorker);
?>
```
/// type=MS, answer=[1,2]

Execute the program. What are the error messages?

 - Warning: A non-numeric value encountered on line number 21

 - Notice: Use of undefined constant `W` - assumed `'W'` on line number 21

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 22

 - Warning: `unserialize()` expects parameter `1` to be string, object given on line number 25

 - syntax error, unexpected `''Accounting''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `')'` on line number 21


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - There is no comma `,` between `Charles Han` and `Accounting` on line 21.

 - On line 21, the first argument `W-1002` is not enclosed in double quotes `""`.

 - There is no argument specified in the `serialize()` function call on line 22.

 - On line 22, the statement `$serializedWorker = serialize($worker);` is invalid.

 - On line 21, the statement `$worker = new Worker(W-1002, 'Charles Han', 'Accounting');` is invalid.

:::


/// type=CR, answer=[tests/Serialization/UnquotedArgumentOnClassInstantiationTest.php]

Correct the code so that it outputs the strings `O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}` and `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker(W-1002, 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($serializedWorker);
print_r($unserializedWorker);
?>
```


:::

/// type=REPL

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($serializedWorker);
print_r($unserializedWorker);
?>
```
/// type=SS, answer=[4]

In the statement `$unserializedWorker = unserialize($serializedWorker);` on line 25, replace `$serializedWorker` with `$worker`. Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 21

 - Notice: Use of undefined constant `W` - assumed `'W'` on line number 21

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 22

 - Warning: `unserialize()` expects parameter `1` to be string, object given on line number 25

 - syntax error, unexpected `''Accounting''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `')'` on line number 21

:::


:::

/// type=REPL

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($worker);
print_r($unserializedWorker);
?>
```
/// type=MS, answer=[3,4]

Remove the argument `$worker` from the statement `$serializedWorker = serialize($worker);` on line 22. Execute the program. What are the error messages?

 - Warning: A non-numeric value encountered on line number 21

 - Notice: Use of undefined constant `W` - assumed `'W'` on line number 21

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 22

 - Warning: `unserialize()` expects parameter `1` to be string, object given on line number 25

 - syntax error, unexpected `''Accounting''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `')'` on line number 21

:::


:::

/// type=REPL

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
$serializedWorker = serialize();
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($worker);
print_r($unserializedWorker);
?>
```
/// type=SS, answer=[5]

In the statement `$worker = new Worker('W-1002', 'Charles Han', 'Accounting');` on line 21, remove the comma `,` between `Charles Han` and `Accounting`. Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 21

 - Notice: Use of undefined constant `W` - assumed `'W'` on line number 21

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 22

 - Warning: `unserialize()` expects parameter `1` to be string, object given on line number 25

 - syntax error, unexpected `''Accounting''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `')'` on line number 21

:::


/// type=CR, answer=[tests/Serialization/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the strings `O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}` and `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.

```php
<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han' 'Accounting');
$serializedWorker = serialize();
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($worker);
print_r($unserializedWorker);
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Serialization/ApplySerializationToObjectsTest.php]

Write a program that uses `serialize()` and `unserialize()` functions to convert an object into a byte-stream representation and vice versa. Given the `Animal` class implementation, add a statement that creates the `$pet` object an instance of the `Animal` class passing the arguments `Cat`, `3`, and `Catsie`. Add another statement that calls the `display()` method of the `$pet` object. Next, add a statement that uses the `serialize()` function to convert the `$pet` object into a string and assigns it to a variable named `$converted`. Then, add the statement `echo "The serialized object is: " . $converted . "\n";`. Add another statement that uses the `unserialize()` function to convert the value of `$converted` back into an object and assigns it to a variable named `$petObject`. Lastly, add a statement that calls the `display()` method of the `$petObject` object. Run the program to view the output.

```php
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

/// required implementations starts here...


?>
```
+++
