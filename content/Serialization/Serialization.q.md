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
/// type=SS, id=6abbfbc3-dd8b-4a02-8a83-9ef964a661a9, answer=[5]

Execute the program. What is its output?

 - It prints `$counter`.

 - It produces an error.

 - No output is displayed.

 - It prints `serialized numbers:`.

 - It prints `serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.


/// type=MS, id=aa68d903-b124-41c1-a986-9f0ed0a4a240, answer=[3,4,5]

Which of the following are variables?

 - `for`

 - `echo`

 - `$number`

 - `$counter`

 - `$converted`


/// type=SS, id=c8193d6d-6430-4e0e-bd85-fd119ac52351, answer=[3]

Which of the following is an array?

 - `echo`

 - `$number`

 - `$myArray`

 - `$counter`

 - `$converted`


/// type=MS, id=72c52746-7da0-4b45-9595-02d2afdf9145, answer=[1,2]

Which of the following are constructs?

 - `for`

 - `echo`

 - `$number`

 - `$counter`

 - `$converted`


/// type=SS, id=c218296e-610d-4e96-a08a-805f94565c45, answer=[5]

In the statement `$converted = serialize($myArray);` on line 6, what is `$myArray`?

 - It is a value.

 - It is a function.

 - It is a construct.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=SS, id=18a284fe-2159-41bd-8543-82588c70f81e, answer=[2]

In the statement `$converted = serialize($myArray);` on line 6, what is `serialize()`?

 - It is a value.

 - It is a function.

 - It is a construct.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=SS, id=ddb749ac-bfd7-4fa0-847c-767332a6e8c2, answer=[2]

In the statement `$converted = serialize($myArray);` on line 6, what is `$converted`?

 - It is a value.

 - It is a variable.

 - It is a function.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=MS, id=76cee223-5956-4e88-8dd4-2dcfb7e04580, answer=[4,5]

In the statement `$converted = serialize($myArray);` on line 6, what does `serialize($myArray)` do?

 - It displays the values in the `$myArray` array.

 - It accesses the values in the `$myArray` array.

 - It removes the values from the `$myArray` array.

 - It converts the values in the `$myArray` array to string.

 - It returns the string representation of the values in the `$myArray` array.


/// type=SS, id=444d1fb6-980f-4eba-ad5d-5b98cb1ec31a, answer=[3]

What is the data type of `$converted`?

 - Array

 - Float

 - String

 - Integer

 - Boolean


/// type=MS, id=977ada57-1094-4133-9ec5-cc6bc8be1da4, answer=[3,5]

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
/// type=SS, id=d18e94da-1ea4-4d78-8d59-835bfd2c6987, answer=[5]

Execute the program. What is its output?

 - It prints `$myArray`.

 - It produces an error.

 - No output is displayed.

 - It prints `a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.

 - It prints `Array ( [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )` in separate lines.


/// type=MS, id=6bc47009-d463-4e2e-b9da-69b77f50001d, answer=[2,5]

Which of the following are arrays?

 - `$number`

 - `$myArray`

 - `$counter`

 - `$converted`

 - `$unserialized`


/// type=SS, id=f1aaa99b-d43e-4e12-bc31-074598d70426, answer=[3]

In the statement `$unserialized = unserialize($converted);` on line 7, what is `unserialize()`?

 - It is a value.

 - It is a variable.

 - It is a function.

 - It is a parameter of type array.

 - It is an argument of type array.


/// type=MS, id=99a5ba58-23e2-4c84-a03f-5f3c53776dda, answer=[4,5]

In the statement `$unserialized = unserialize($converted);` on line 7, what does `unserialize($converted)` do?

 - It displays the value of `$converted`.

 - It accesses the value of `$converted`.

 - It removes the value from `$converted`.

 - It returns the converted value of type array.

 - It converts the value of `$converted` back to an array.


/// type=MS, id=4b9cb321-f09c-4aa5-a833-5b8124bf3771, answer=[3,5]

Which statements correctly describe the code on line 7?

 - It accesses the value of `$converted`.

 - It sets the value of `$unserialized` to `$converted`.

 - It converts the value of `$converted` back to an array.

 - It assigns the value of `$converted` to `$unserialized`.

 - It assigns the converted values of type array to `$unserialized`.


/// type=SS, id=58364b92-dcfa-41c6-adfe-27fef429f405, answer=[1]

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
/// type=SS, id=e7ead776-af53-41d0-93aa-f320c2c7927b, answer=[5]

Execute the program. What is its output?

 - It prints `$id`.

 - It prints `Name`.

 - It prints `Accounting`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002)`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.


/// type=SS, id=1c0647c8-a5e3-4a73-92ed-0b469db72b33, answer=[2]

Which of the following is a class?

 - `$name`

 - `Worker`

 - `$worker`

 - `display()`

 - `__construct()`


/// type=MS, id=0777d265-c153-4edb-849b-bedda9f86e0d, answer=[1,2,3]

Which of the following are properties?

 - `$id`

 - `$name`

 - `$dept`

 - `$worker`

 - `display()`


/// type=MS, id=05fcc3d3-82fe-4b5b-8e2b-039c16614a7b, answer=[4,5]

Which of the following are methods?

 - `$name`

 - `Worker`

 - `$worker`

 - `display()`

 - `__construct()`


/// type=SS, id=5c3b8922-f473-4bfb-bb0f-622d65888992, answer=[3]

Which of the following is an instance of the `Worker` class?

 - `$name`

 - `Worker`

 - `$worker`

 - `display()`

 - `__construct()`


/// type=SS, id=b8874cf1-1cc9-4d67-b303-ed891e6e857f, answer=[1]

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
/// type=SS, id=7d62179d-e04b-4512-b75c-98326dcd6d79, answer=[4]

Execute the program. What is its output?

 - It produces an error.

 - It prints `W-1002', 'Charles Han', 'Accounting'`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002)`.

 - It prints `O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.


/// type=SS, id=5586c41f-bd99-4098-a6b4-1cfa435cce7e, answer=[5]

In the statement `$serializedWorker = serialize($worker);` on line 22, what is `$worker`?

 - It is a value.

 - It is a variable.

 - It is a function.

 - It is an argument of type array.

 - It is an argument of type object.


/// type=MS, id=a864055b-c815-46f3-add6-60564b4e6e27, answer=[4,5]

In the statement `$serializedWorker = serialize($worker);` on line 22, what does `serialize($worker)` do?

 - It displays the values in the `$worker` object.

 - It accesses the values in the `$worker` object.

 - It removes the values from the `$worker` object.

 - It converts the values in the `$worker` object to string.

 - It returns the string representation of the values in the `$worker` object.


/// type=MS, id=714bd7fd-4c08-443e-97c6-4e6ec95cfd98, answer=[3,5]

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
/// type=MS, id=9071912f-b325-4bf9-9cee-6f7c7478902a, answer=[4,5]

Execute the program. What are its outputs?

 - It produces an error.

 - It prints `W-1002', 'Charles Han', 'Accounting'`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002)`.

 - It prints `O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}`.

 - It prints `Worker Object ( [id:Worker:private] => W-1002 [name:protected] => Charles Han [dept:protected] => Accounting )` in separate lines.


/// type=MS, id=2266ef43-10fc-4534-b363-55959f2d2749, answer=[4,5]

Which statements correctly describe the `serialize()` function on line 22?

 - It displays the values in the `$worker` object.

 - It accesses the values in the `$worker` object.

 - It removes the values from the `$worker` object.

 - It converts the values in the `$worker` object to string.

 - It returns the string representation of the values in the `$worker` object.


/// type=MS, id=512efbbd-a310-4252-af11-ce2bb0dae551, answer=[3,5]

Which statements correctly describe `$serializedWorker = serialize($worker);` on line 22?

 - It accesses the `$worker` object.

 - It sets the value of `$serializedWorker` to `$worker`.

 - It converts the values in the `$worker` object to string.

 - It assigns the values in the `$worker` object to `$serializedWorker`.

 - It assigns the string representation of the values in the `$worker` object to `$serializedWorker`.


/// type=SS, id=9eb06f5e-44c2-4d87-8905-83b6ae6c6559, answer=[4]

In the statement `$unserializedWorker = unserialize($serializedWorker);` on line 25, what is `$serializedWorker`?

 - It is a value.

 - It is a variable.

 - It is an argument of type array.

 - It is an argument of type string.

 - It is an argument of type object.


/// type=MS, id=e4fc34c1-84df-4240-9b14-d247d635e44d, answer=[1,5]

In the statement `$unserializedWorker = unserialize($serializedWorker);` on line 25, what does `unserialize($serializedWorker)` do?

 - It returns the converted value of type object.

 - It displays the value of `$serializedWorker`.

 - It accesses the value of `$serializedWorker`.

 - It removes the value from `$serializedWorker`.

 - It converts the value of `$serializedWorker` back to type object.


/// type=MS, id=f7763cfd-c6db-4695-8683-74aab3f671d9, answer=[2,5]

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

/// type=SS, id=e3af9fe3-6840-4b24-9237-ded60f3d62e5, answer=[5]

Which statement is true about serialization?

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes.

 - It enables a function to specify the data type of a value that an argument accepts.

 - It is a way to store information state and history of user activities in a certain application.

 - It is a process of converting any PHP values into a storable representation without losing their type and structure.


/// type=SS, id=52c0eac2-1fa9-4ac4-b4b7-19847ea75fc2, answer=[1]

Which statement best describes the `serialize()` function?

 - It creates a byte-stream representation of a value.

 - It enables strict type mode validations within the file.

 - It collects form data submitted through the HTTP POST method.

 - It sets a specific data type of the parameter in a function declaration. 

 - It converts a byte-stream representation back to a specific PHP value.


/// type=SS, id=5662e8eb-9ce6-434e-8f3a-8471f7f09962, answer=[5]

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
/// type=SS, id=1c5172cc-368f-4396-8c09-e92a618a0e6a, answer=[2]

Execute the program. What is its output?

 - It prints `$counter`.

 - It produces an error.

 - No output is displayed.

 - It prints `serialized numbers:`.

 - It prints `serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}`.


/// type=SS, id=775e10e4-e267-4739-a4a2-3cb5e283c271, answer=[2]

What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, id=7743b9c3-0a56-4a66-8e26-dc01b7625ef6, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 6.

 - On line 6, the argument `$myArray` is not enclosed in double quotes `""`.

 - On line 6, the statement `$converted  serialize($myArray);` is invalid.

 - There is no argument specified in the `serialize()` function call on line 6.

 - There is no assignment operator `=` between `$converted` and `serialize($myArray)` on line 6.

:::


/// type=CR, id=aa969a70-d99e-42ff-b2b9-44b1d8a2336e, answer=[tests/Serialization/MissingAssignmentOperatorTest.php]

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
/// type=SS, id=5a9079a0-a912-4b2c-a8a3-0ca5a052994e, answer=[3]

Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, id=58d110cd-88ff-443d-b7c5-2ec872c33828, answer=[3,4]

Which statements correctly describe the error?

 - There are parentheses `()` after `serialize` on line 6.

 - There is no semicolon `;` at the end of the statement on line 6.

 - On line 6, the statement `$converted = serialize();` is invalid.

 - There is no argument specified in the `serialize()` function call on line 6.

 - There is no assignment operator `=` between `$converted` and `serialize()` on line 6.

:::


/// type=CR, id=a802fc30-7815-483d-b64b-17ce28f96a3d, answer=[tests/Serialization/MissingSerializeFunctionArgumentTest.php]

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
/// type=SS, id=653099f9-c29e-495b-b781-c36a4370e2ae, answer=[5]

Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, id=975ab321-38ca-4e9a-80c1-6b8ed69f68b9, answer=[1,4,5]

Which statements correctly describe the error?

 - The `unserialize()` function only accepts an argument of type string.

 - On line 6, the statement `$converted = serialize($myArray);` is invalid.

 - On line 6, the argument `$myArray` in the `serialize()` function call is invalid.

 - On line 7, the argument `$myArray` in the `unserialize()` function call is invalid.

 - On line 7, the statement `$unserialized = unserialize($myArray);` is invalid.

:::


/// type=CR, id=201c591e-7857-4dd2-b7db-ff3ccf007fa2, answer=[tests/Serialization/IncorrectArgumentTypeForUnserializeFunctionTest.php]

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
/// type=SS, id=8d8fbae3-42d6-4440-afac-7e9f403f31e3, answer=[4]

Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 6

 - syntax error, unexpected `'serialize'` (T_STRING) on line number 6

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 6

 - Warning: `unserialize()` expects at least `1` parameter, `0` given on line number 7

 - Warning: `unserialize()` expects parameter `1` to be string, array given on line number 7


/// type=MS, id=12e2e24b-f101-4ff0-b8f1-4869ecff0188, answer=[1,4]

Which statements correctly describe the error?

 - On line 7, the statement `$unserialized = unserialize();` is invalid.

 - There is no argument specified in the `serialize()` function call on line 6.

 - On line 6, the statement `$converted = serialize($myArray);` is invalid.

 - There is no argument specified in the `unserialize()` function call on line 7.

 - On line 6, the argument `$myArray` in the `serialize()` function call is invalid.

:::


/// type=CR, id=14aadddb-c614-4bec-8dbf-e6fd52a5901e, answer=[tests/Serialization/MissingArgumentTypeForUnserializeFunctionTest.php]

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
/// type=MS, id=e623ccb3-b031-4be8-a066-13222b97ecd6, answer=[1,2]

Execute the program. What are the error messages?

 - Warning: A non-numeric value encountered on line number 21

 - Notice: Use of undefined constant `W` - assumed `'W'` on line number 21

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 22

 - Warning: `unserialize()` expects parameter `1` to be string, object given on line number 25

 - syntax error, unexpected `''Accounting''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `')'` on line number 21


/// type=MS, id=091a0b68-d9ec-49ed-9172-9d393b8ee85c, answer=[2,5]

Which statements correctly describe the error?

 - There is no comma `,` between `Charles Han` and `Accounting` on line 21.

 - On line 21, the first argument `W-1002` is not enclosed in single quotes `''`.

 - There is no argument specified in the `serialize()` function call on line 22.

 - On line 22, the statement `$serializedWorker = serialize($worker);` is invalid.

 - On line 21, the statement `$worker = new Worker(W-1002, 'Charles Han', 'Accounting');` is invalid.

:::


/// type=CR, id=fdd343c5-3e3a-4f21-a341-45717ce13e79, answer=[tests/Serialization/UnquotedArgumentOnClassInstantiationTest.php]

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
/// type=SS, id=bf767c7c-b963-443c-86e8-08d678c1c96f, answer=[4]

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
/// type=MS, id=d0719147-afcc-41e7-8fea-b418ee1a15f0, answer=[3,4]

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
/// type=SS, id=301ce612-8d26-4491-b72c-5e0ea65f68f1, answer=[5]

In the statement `$worker = new Worker('W-1002', 'Charles Han', 'Accounting');` on line 21, remove the comma `,` between `Charles Han` and `Accounting`. Execute the program. What is the error message?

 - Warning: A non-numeric value encountered on line number 21

 - Notice: Use of undefined constant `W` - assumed `'W'` on line number 21

 - Warning: `serialize()` expects exactly `1` parameter, `0` given on line number 22

 - Warning: `unserialize()` expects parameter `1` to be string, object given on line number 25

 - syntax error, unexpected `''Accounting''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `')'` on line number 21

:::


/// type=CR, id=b35d22d0-aee0-46df-86d6-a5d3661e86e0, answer=[tests/Serialization/CorrectMultipleErrorsTest.php]

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

/// type=CR, id=cbf1402e-70ec-4a50-a8bf-c701b2d64130, answer=[tests/Serialization/ApplySerializationToObjectsTest.php]

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
