# Custom Exceptions

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```
/// type=SS, id=de2e39a2-0987-4a22-bdee-ee22dbf7fc89, answer=[5]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=MS, id=6859c04f-8552-4753-b772-3eeb94ec1fbd, answer=[2,3,5]

Which of the following are exception handling keywords?

 - `new`

 - `try`

 - `throw`

 - `class`

 - `catch`


/// type=MS, id=4b90fab7-61e7-4c76-bf52-b614ebe1f403, answer=[4,5]

Which of the following are classes?

 - `$div`

 - `catch`

 - `divide()`

 - `Exception`

 - `DivideByZeroException`


/// type=SS, id=8a3162e3-cc31-44fc-8396-cde87ff82562, answer=[1]

Which of the following is an object?

 - `$div`

 - `catch`

 - `divide()`

 - `Exception`

 - `DivideByZeroException`


/// type=SS, id=9edf2940-456e-472a-8156-dfd9a975f340, answer=[4]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `class`?

 - It is a value.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is an exception.


/// type=SS, id=39f06b29-daea-4f5f-ab49-ba46eeebecc2, answer=[1]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `Exception`?

 - It is a class.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is an exception.


/// type=SS, id=10ca3798-3e29-49f8-a9ac-3221fa124df0, answer=[4]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `extends`?

 - It is a class.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is an exception.


/// type=SS, id=0717bb8e-47e3-480f-befa-5e20d04c5c2e, answer=[5]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `DivideByZeroException`?

 - It is a value.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a custom exception class.


/// type=MS, id=e45c77a4-c237-43b5-840e-f2bb39bcafc5, answer=[2,4]

On line 2 of `DivideByZeroException.php`, what does `class DivideByZeroException extends Exception` do?

 - It is a definition of the `DivideByZeroException` class that replaces the `Exception` class.

 - It is a definition of the `DivideByZeroException` class as the child class of the `Exception` class.

 - It is a definition of the `Exception` class as the child class of the `DivideByZeroException` class.

 - It creates the `DivideByZeroException` class that inherits all the public and protected properties and methods of the `Exception` class.

 - It creates the `Exception` class that inherits all the public and protected properties and methods of the `DivideByZeroException` class.


/// type=SS, id=d575a1e4-f1f1-44c2-bebd-94a977c8c57a, answer=[4]

In the statement `require_once(__DIR__ . "/DivideByZeroException.php");` on line 2 of `Main.php`, what is `require_once`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a construct.

 - It is a custom exception class.


/// type=SS, id=4420d4aa-1fe9-4ac2-8bec-aa6b91aaad9c, answer=[5]

In the statement `require_once(__DIR__ . "/DivideByZeroException.php");` on line 2 of `Main.php`, what is `__DIR__`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a construct.

 - It is a magic constant.


/// type=SS, id=c1d5c0e6-a415-44f3-9ac6-8df5b5c7c667, answer=[3]

On line 2 of `Main.php`, what does `require_once(__DIR__ . "/DivideByZeroException.php");` do?

 - It establishes a relationship between classes.

 - It updates the file `DivideByZeroException.php`.

 - It includes the file `DivideByZeroException.php` in the file `Main.php`.

 - It removes the file `DivideByZeroException.php` in the file `Main.php`.

 - It excludes the file `DivideByZeroException.php` in the file `Main.php`.


/// type=MS, id=ef1fcfab-abc6-4c19-821a-8c87d2f98ea4, answer=[1,2,5]

On line 7 of `Main.php`, what does the statement `throw new DivideByZeroException("The value '0' as a divisor is not allowed.");` do?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception if the condition `$divisor == 0` evaluates to `true`.

 - It throws an exception if the condition `$divisor == 0` evaluates to `false`.

 - It accesses the `Exception` class argument `The value '0' as a divisor is not allowed.`.

 - It creates a new object of the `DivideByZeroException` class passing the argument `The value '0' as a divisor is not allowed.`.


/// type=SS, id=56086bff-cef5-4a36-8d78-67177ad6ef77, answer=[5]

On lines 13, 14, and 14 of `Main.php`, what does the `try { echo divide(10, 0); }` block do?

 - It evaluates the `divide(10, 0)` function call in the `echo` statement.

 - It throws an exception when an error occurs in the `divide(10, 0)` function call.

 - It returns an exception when an error occurs in the `divide(10, 0)` function call.

 - It displays the exception message `The value '0' as a divisor is not allowed.`.

 - It facilitates the catching of a possible exception thrown by the `divide(10, 0)` function call.


/// type=MS, id=f3dd3528-b931-4f2b-a323-7d5e621ddce7, answer=[4,5]

On lines 15, 16, and 17 of `Main.php`, what does the `catch (DivideByZeroException $div) { echo "Exception caught: " . $div->errorMessage(); }` block do?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `DivideByZeroException $div`.

 - It returns an exception when an error occurs in `DivideByZeroException $div`.

 - It catches the possible `DivideByZeroException` exception that occurs in the `try` block.

 - It executes the `echo` statement if a `DivideByZeroException` exception occurs in the `try` block.


/// type=MS, id=7bcd3acd-3915-4c46-95d7-aa22a5a3ab5f, answer=[2,3,5]

Which statements correctly describe the `DivideByZeroException` class?

 - It throws an exception when an error occurs in a program.

 - It handles the possible exception that occurs in a program.

 - It is a user-defined exception class that inherits the `Exception` class.

 - It catches the possible `Exception` exception that occurs in a program.

 - It has the `errorMessage()` method that returns an error message if an exception occurs.

:::


:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>
```
/// type=SS, id=d45d7839-8295-4e2d-bc40-da2eb3ccfdff, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: A negative number as a divisor is encountered in /Main.php`.


/// type=MS, id=b2d7d77a-a787-4267-9028-e868651123c9, answer=[2,3,5]

Which of the following are exception handling keywords?

 - `new`

 - `try`

 - `throw`

 - `class`

 - `catch`


/// type=MS, id=94be0501-44c5-4f48-94bc-731229233039, answer=[4,5]

Which of the following are custom exception classes?

 - `$div`

 - `catch`

 - `Exception`

 - `DivideByZeroException`

 - `DivideByNegativeException`


/// type=MS, id=afd67206-cb61-4a0f-b6d1-fe3a2503d14f, answer=[3,4,5]

Which of the following are custom exception methods?

 - `getFile()`

 - `getMessage()`

 - `myErrorFile()`

 - `errorMessage()`

 - `myErrorMessage()`


/// type=MS, id=07d1b8de-ee97-4cbf-b288-f0b2949355d3, answer=[1,2]

Which of the following are objects?

 - `$div`
 
 - `$neg`

 - `Exception`

 - `DivideByZeroException`

 - `DivideByNegativeException`


/// type=MS, id=8a9cc8e3-0f14-4ebf-bd27-9a0cce72dd7a, answer=[2,3,4]

Which statements correctly describe the `DivideByNegativeException` class?

 - It throws an exception when an error occurs in a program.

 - It handles the possible exception that occurs in a program.

 - It has `myErrorMessage()` and `myErrorFile` custom methods.

 - It is a user-defined exception class that inherits the `Exception` class.

 - It catches the possible `Exception` exception that occurs in a program.


/// type=MS, id=dee43f80-3335-485d-b31e-1dbc48fefe0b, answer=[4,5]

Which statements correctly describe the `myErrorMessage()` method of the `DivideByNegativeException` class?

 - It does not return a value.

 - It accepts two arguments of type string.

 - It throws an error message if an exception occurs.

 - It is a user-defined method of the `DivideByNegativeException` class.

 - It returns the error message `A negative number as a divisor is encountered` if an exception occurs.


/// type=MS, id=3f1dda27-ee0d-49c2-83bb-3868b600998e, answer=[4,5]

Which statements correctly describe the `myErrorFile()` method of the `DivideByNegativeException` class?

 - It does not return a value.

 - It accepts two arguments of type string.

 - It throws an error message if an exception occurs.

 - It returns the name of the file where the specific exception is created.

 - It is a user-defined method of the `DivideByNegativeException` class.


/// type=MS, id=1b451bdc-2891-46b9-aff5-a5a6ec1d315f, answer=[4,5]

Which statements correctly describe the `catch` block on lines 18 and 19 of `Main.php`?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `DivideByZeroException $div`.

 - It returns an exception when an error occurs in `DivideByZeroException $div`.

 - It catches the possible `DivideByZeroException` exception that occurs in the `try` block.

 - It executes the `echo` statement if a `DivideByZeroException` exception occurs in the `try` block.


/// type=MS, id=276afd10-9d42-4aa2-bc68-b5ac1a211e20, answer=[4,5]

Which statements correctly describe the `catch` block on lines 20 and 21 of `Main.php`?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `DivideByNegativeException $neg`.

 - It returns an exception when an error occurs in `DivideByNegativeException $neg`.

 - It catches the possible `DivideByNegativeException` exception that occurs in the `try` block.

 - It executes the `echo` statement if a `DivideByNegativeException $neg` exception occurs in the `try` block.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=5ec04799-eee7-4e88-b4a8-725a4b9fff82, answer=[4]

Which statement best describes an exception?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=SS, id=beb5a64e-605d-4c14-9100-a1ab1a9ea4cc, answer=[5]

Which statement best describes exception handling?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=SS, id=0504508d-f63f-4f85-ab1a-5c7554557ad3, answer=[5]

Which statement best describes the custom exception handling class?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is a user-defined class that extends the `Exception` class and inherits its methods and properties.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
class DivideByZeroException  Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```
/// type=SS, id=8bb6ecd1-f493-4b5c-8a4c-a34edf53f0d5, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=SS, id=0cd9a1f0-397f-49c0-9cd1-00feca2b347b, answer=[5]

What is the error message?

 - Undefined variable: `new` in /Main.php on line number 7

 - syntax error, unexpected `'new'` (T_NEW) in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - syntax error, unexpected `'extends'` (T_EXTENDS) in /DivideByZeroException.php on line number 2

 - syntax error, unexpected `'Exception'` (T_STRING), expecting `'{'` in /DivideByZeroException.php on line number 2


/// type=MS, id=45a8a50a-f1fe-49d7-aab3-1f0f79149a11, answer=[4,5]

Which statements correctly describe the error?

 - On line 4 of `DivideByZeroException.php`, the declaration `public function errorMessage()` is invalid.

 - There are no parentheses `()` after `public function errorMessage` on line 4 of `DivideByZeroException.php`.

 - There is no `class` keyword specified before `DivideByZeroException` on line 2 of `DivideByZeroException.php`.

 - On line 2 of `DivideByZeroException.php`, the declaration `class DivideByZeroException  Exception` is invalid.

 - There is no `extends` keyword specified between `DivideByZeroException` and `Exception` on line 2 of `DivideByZeroException.php`.

:::


/// type=CR, id=66a98760-cdcb-460b-86b9-13b53f9cdfaa, answer=[tests/CustomExceptions/MissingExtendsKeywordTest.php], filename=[Main.php,DivideByZeroException.php]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
class DivideByZeroException  Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
 DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```
/// type=SS, id=999e0f24-5a77-4fa1-88fc-a5794540d9b1, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `new` in /Main.php on line number 7

 - syntax error, unexpected `'new'` (T_NEW) in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - syntax error, unexpected `'extends'` (T_EXTENDS) in /DivideByZeroException.php on line number 2

 - syntax error, unexpected `'Exception'` (T_STRING), expecting `'{'` in /DivideByZeroException.php on line number 2


/// type=MS, id=23ffa848-9e12-4188-9d95-80ec1c0c1d67, answer=[3,4]

Which statements correctly describe the error?

 - On line 4 of `DivideByZeroException.php`, the declaration `public function errorMessage()` is invalid.

 - There are no parentheses `()` after `public function errorMessage` on line 4 of `DivideByZeroException.php`.

 - There is no `class` keyword specified before `DivideByZeroException` on line 2 of `DivideByZeroException.php`.

 - On line 2 of `DivideByZeroException.php`, the declaration `DivideByZeroException extends Exception` is invalid.

 - There is no `extends` keyword specified between `DivideByZeroException` and `Exception` on line 2 of `DivideByZeroException.php`.

:::


/// type=CR, id=e1828711-fb4e-4469-92f6-a75712617a9c, answer=[tests/CustomExceptions/MissingClassKeywordTest.php], filename=[Main.php,DivideByZeroException.php]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
 DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throws new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```
/// type=SS, id=2cc05785-6ff4-438d-be9e-7f18b63908b7, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `new` in /Main.php on line number 7

 - syntax error, unexpected `'new'` (T_NEW) in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - syntax error, unexpected `'extends'` (T_EXTENDS) in /DivideByZeroException.php on line number 2

 - syntax error, unexpected `'Exception'` (T_STRING), expecting `'{'` in /DivideByZeroException.php on line number 2


/// type=MS, id=b5953095-e80b-4c9a-8c3e-37a8346002ba, answer=[4,5]

Which statements correctly describe the error?

 - There is no `new` keyword specified after `throw` on line 7 of `Main.php`.

 - There is no semicolon `;` at the end of the statement on line 7 of `Main.php`.

 - There is no open curly brace `{` after the `if` construct on line 6 of `Main.php`.

 - In the `throw` statement on line 7 of `Main.php`, the `throw` keyword is misspelled as `throws`.

 - On line 7 of `Main.php`, the statement `throws new DivideByZeroException("The value '0' as a divisor is not allowed.");` is invalid.

:::


/// type=CR, id=af590d6b-0381-40da-9dc3-11cf9fb28891, answer=[tests/CustomExceptions/MisspelledThrowKeywordTest.php], filename=[Main.php,DivideByZeroException.php]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throws new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>
```
/// type=MS, id=2612505b-a08b-47fb-8b59-37c4ec19c8ce, answer=[2,3]

Execute the program. What are the error messages?

 - Undefined variable: `new` in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Uncaught Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10

 - Uncaught Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10


/// type=SS, id=98d70caa-9ab8-4c49-bb4a-fdeaf73540bc, answer=[5]

Which statement best describes the error?

 - There is no `new` keyword specified after `throw` on line 7 of `Main.php`.

 - There is no semicolon `;` at the end of the statement on line 7 of `Main.php`.

 - There is no open curly brace `{` after the `if` construct on line 6 of `Main.php`.

 - In the `throw` statement on line 7 of `Main.php`, the `throw` keyword is misspelled as `throws`.

 - There is no `require_once()` statement that includes the `DivideByNegativeException.php` file in the `Main.php` file.

:::


/// type=CR, id=f4f2b2ec-00f9-4044-bde4-ffb76e3920db, answer=[tests/CustomExceptions/MissingRequireStatementTest.php], filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

Correct the code so that it outputs the string `Exception caught: A negative number as a divisor is encountered in /Main.php`.

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw  DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>
```
/// type=MS, id=a5861f56-0196-4cf2-9b4e-2ed4182eb2d0, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `new` in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Uncaught Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10

 - Uncaught Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10


/// type=MS, id=f7c9f882-7b94-41c2-9b48-b307da988e9e, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 7 of `Main.php`.

 - There is no open curly brace `{` after the `if` construct on line 6 of `Main.php`.

 - On line 10 of `Main.php`, the statement `throw  DivideByNegativeException();` is invalid.

 - In the `throw` statement on line 10 of `Main.php`, the `throw` keyword is misspelled as `throws`.

 - There is no `new` keyword specified between `throw` and `DivideByNegativeException()` on line 10 of `Main.php`.

:::


/// type=CR, id=98b81697-b874-4021-81c7-ca82020dcbb5, answer=[tests/CustomExceptions/MissingNewKeywordClassInstanceTest.php], filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

Correct the code so that it outputs the string `Exception caught: A negative number as a divisor is encountered in /Main.php`.

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw  DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>
```


:::

/// type=REPL, filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $this->getFile();
    }
}
?>
```
/// type=MS, id=74e2c2b1-221e-4fd7-b64a-859d905ab615, answer=[1,2,5]

On line 11 of `DivideByNegativeException.php`, remove the object operator `->` from `$this->getFile()`. Execute the program. What are the error messages?

 - Undefined variable: `thisgetFile` in /DivideByNegativeException.php on line number 11

 - Error: Function name must be a string in /DivideByNegativeException.php on line number 11

 - syntax error, unexpected `'{'`, expecting `'('` in /DivideByZeroException.php on line number 5

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) in /Main.php on line number 18

 - Uncaught Error: Function name must be a string in /DivideByNegativeException.php on line number 11

:::


:::

/// type=REPL, filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $thisgetFile();
    }
}
?>
```
/// type=SS, id=e4acbf4b-4cb7-4a27-819b-f50111afee4a, answer=[3]

On line 4 of `DivideByZeroException.php`, remove the parentheses `()` from `public function errorMessage()`. Execute the program. What is the error message?

 - Undefined variable: `thisgetFile` in /DivideByNegativeException.php on line number 11

 - Error: Function name must be a string in /DivideByNegativeException.php on line number 11

 - syntax error, unexpected `'{'`, expecting `'('` in /DivideByZeroException.php on line number 5

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) in /Main.php on line number 18

 - Uncaught Error: Function name must be a string in /DivideByNegativeException.php on line number 11

:::


:::

/// type=REPL, filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $thisgetFile();
    }
}
?>
```
/// type=SS, id=a8e3b0bd-3153-41b7-b9c1-d32fc717c26e, answer=[4]

On line 18 of `Main.php`, remove `$div` from `catch (DivideByZeroException $div)`. Execute the program. What is the error message?

 - Undefined variable: `thisgetFile` in /DivideByNegativeException.php on line number 11

 - Error: Function name must be a string in /DivideByNegativeException.php on line number 11

 - syntax error, unexpected `'{'`, expecting `'('` in /DivideByZeroException.php on line number 5

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) in /Main.php on line number 18

 - Uncaught Error: Function name must be a string in /DivideByNegativeException.php on line number 11

:::


/// type=CR, id=e1359fb8-0dfd-48e3-b96d-3fba4545b61f, answer=[tests/CustomExceptions/CorrectMultipleErrorsTest.php], filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

Correct the code so that it outputs the string `Exception caught: A negative number as a divisor is encountered in /Main.php`.

```php
<?php
require_once(__DIR__ . "/DivideByZeroException.php");
require_once(__DIR__ . "/DivideByNegativeException.php");

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    } elseif ($divisor < 0) {
        throw new DivideByNegativeException();
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, -2);
} catch (DivideByZeroException ) {
    echo "Exception caught: " . $div->errorMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage
    {
        return $this->getMessage();
    }
}
?>
```

```php
<?php
class DivideByNegativeException extends Exception 
{
    public function myErrorMessage()
    {
        return "A negative number as a divisor is encountered";
    }

    public function myErrorFile()
    {
        return $thisgetFile();
    }
}
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=9d777c4d-89ed-4b03-8e32-24c162af398e, answer=[tests/CustomExceptions/CreateNewCustomExceptionClassTest.php], filename=[PracticeMain.php,FileNotFoundException.php]

Write a program that creates a custom exception class to handle exceptions gracefully. In the `FileNotFoundException.php` tab, use a `class` keyword to declare a custom exception class named `FileNotFoundException` that extends the `Exception` class. Within the curly braces `{}`, add a `public` method named `getErrorMessage()`. Inside the `getErrorMessage()` method body, add the statement `return $this->getMessage()`.

In the `PracticeMain.php` tab, create a funtion named `OpenFile()` with the parameter `$file`. Inside the function body, create an `if-else` statement to test if `$file` exists or not. In the `if` construct, add the condition `!file_exists($file)`. Inside the `if` block, add the statement `throw new FileNotFoundException("Sorry, the file does not exist");`. Inside the `else` block, add the statement `fopen($file, "w");`. Next, Add a `try` and `catch` blocks. Inside the `try` block, add the statement `OpenFile("myTest.txt");` Then, add the `catch` block `catch (FileNotFoundException $fe) { echo "Exception caught: " . $fe->getErrorMessage() . " in " . $fe->getFile() . " on line number " . $fe->getLine(); }`. Run the program to view the output.

```php
<?php
require_once(__DIR__ . "/FileNotFoundException.php");
// PracticeMain.php



?>
```

```php
<?php
// FileNotFoundException.php



?>
```

+++
