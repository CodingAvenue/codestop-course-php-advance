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
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=MS, answer=[2,3,5]

Which of the following are exception handling keywords?

 - `new`

 - `try`

 - `throw`

 - `class`

 - `catch`


/// type=MS, answer=[4,5]

Which of the following are classes?

 - `$div`

 - `catch`

 - `divide()`

 - `Exception`

 - `DivideByZeroException`


/// type=SS, answer=[1]

Which of the following is an object?

 - `$div`

 - `catch`

 - `divide()`

 - `Exception`

 - `DivideByZeroException`


/// type=SS, answer=[4]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `class`?

 - It is a value.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is an exception.


/// type=SS, answer=[1]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `Exception`?

 - It is a class.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is an exception.


/// type=SS, answer=[4]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `extends`?

 - It is a class.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is an exception.


/// type=SS, answer=[5]

In the declaration `class DivideByZeroException extends Exception` on line 2 of `DivideByZeroException.php`, what is `DivideByZeroException`?

 - It is a value.

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a custom exception class.


/// type=MS, answer=[2,4]

On line 2 of `DivideByZeroException.php`, what does `class DivideByZeroException extends Exception` do?

 - It is a definition of the `DivideByZeroException` class that replaces the `Exception` class.

 - It is a definition of the `DivideByZeroException` class as the child class of the `Exception` class.

 - It is a definition of the `Exception` class as the child class of the `DivideByZeroException` class.

 - It creates the `DivideByZeroException` class that inherits all the public and protected properties and methods of the `Exception` class.

 - It creates the `Exception` class that inherits all the public and protected properties and methods of the `DivideByZeroException` class.


/// type=SS, answer=[4]

In the statement `require_once(__DIR__ . "/DivideByZeroException.php");` on line 2 of `Main.php`, what is `require_once`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a construct.

 - It is a custom exception class.


/// type=SS, answer=[5]

In the statement `require_once(__DIR__ . "/DivideByZeroException.php");` on line 2 of `Main.php`, what is `__DIR__`?

 - It is a method.

 - It is an object.

 - It is a keyword.

 - It is a construct.

 - It is a magic constant.


/// type=SS, answer=[3]

On line 2 of `Main.php`, what does `require_once(__DIR__ . "/DivideByZeroException.php");` do?

 - It establishes a relationship between classes.

 - It updates the file `DivideByZeroException.php`.

 - It includes the file `DivideByZeroException.php` in the file `Main.php`.

 - It removes the file `DivideByZeroException.php` in the file `Main.php`.

 - It excludes the file `DivideByZeroException.php` in the file `Main.php`.


/// type=MS, answer=[1,2,5]

On line 7 of `Main.php`, what does the statement `throw new DivideByZeroException("The value '0' as a divisor is not allowed.");` do?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception if the condition `$divisor == 0` evaluates to `true`.

 - It throws an exception if the condition `$divisor == 0` evaluates to `false`.

 - It accesses the `Exception` class argument `The value '0' as a divisor is not allowed.`.

 - It creates a new object of the `DivideByZeroException` class passing the argument `The value '0' as a divisor is not allowed.`.


/// type=SS, answer=[5]

On lines 13, 14, and 14 of `Main.php`, what does the `try { echo divide(10, 0); }` block do?

 - It evaluates the `divide(10, 0)` function call in the `echo` statement.

 - It throws an exception when an error occurs in the `divide(10, 0)` function call.

 - It returns an exception when an error occurs in the `divide(10, 0)` function call.

 - It displays the exception message `The value '0' as a divisor is not allowed.`.

 - It facilitates the catching of a possible exception thrown by the `divide(10, 0)` function call.


/// type=MS, answer=[4,5]

On lines 15, 16, and 17 of `Main.php`, what does the `catch (DivideByZeroException $div) { echo "Exception caught: " . $div->errorMessage(); }` block do?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `DivideByZeroException $div`.

 - It returns an exception when an error occurs in `DivideByZeroException $div`.

 - It catches the possible `DivideByZeroException` exception that occurs in the `try` block.

 - It executes the `echo` statement if a `DivideByZeroException` exception occurs in the `try` block.


/// type=MS, answer=[2,3,5]

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
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: A negative number as a divisor is encountered in /Main.php`.


/// type=MS, answer=[2,3,5]

Which of the following are exception handling keywords?

 - `new`

 - `try`

 - `throw`

 - `class`

 - `catch`


/// type=MS, answers=[4,5]

Which of the following are custom exception classes?

 - `$div`

 - `catch`

 - `Exception`

 - `DivideByZeroException`

 - `DivideByNegativeException`


/// type=MS, answer=[3,4,5]

Which of the following are custom exception methods?

 - `getFile()`

 - `getMessage()`

 - `myErrorFile()`

 - `errorMessage()`

 - `myErrorMessage()`


/// type=MS, answer=[1,2]

Which of the following are objects?

 - `$div`
 
 - `$neg`

 - `Exception`

 - `DivideByZeroException`

 - `DivideByNegativeException`


/// type=MS, answer=[2,3,4]

Which statements correctly describe the `DivideByNegativeException` class?

 - It throws an exception when an error occurs in a program.

 - It handles the possible exception that occurs in a program.

 - It has `myErrorMessage()` and `myErrorFile` custom methods.

 - It is a user-defined exception class that inherits the `Exception` class.

 - It catches the possible `Exception` exception that occurs in a program.


/// type=MS, answer=[4,5]

Which statements correctly describe the `myErrorMessage()` method of the `DivideByNegativeException` class?

 - It does not return a value.

 - It accepts two arguments of type string.

 - It throws an error message if an exception occurs.

 - It is a user-defined method of the `DivideByNegativeException` class.

 - It returns the error message `A negative number as a divisor is encountered` if an exception occurs.


/// type=MS, answer=[4,5]

Which statements correctly describe the `myErrorFile()` method of the `DivideByNegativeException` class?

 - It does not return a value.

 - It accepts two arguments of type string.

 - It throws an error message if an exception occurs.

 - It returns the name of the file where the specific exception is created.

 - It is a user-defined method of the `DivideByNegativeException` class.


/// type=MS, answer=[4,5]

Which statements correctly describe the `catch` block on lines 18 and 19 of `Main.php`?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `DivideByZeroException $div`.

 - It returns an exception when an error occurs in `DivideByZeroException $div`.

 - It catches the possible `DivideByZeroException` exception that occurs in the `try` block.

 - It executes the `echo` statement if a `DivideByZeroException` exception occurs in the `try` block.


/// type=MS, answer=[4,5]

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

/// type=SS, answer=[4]

Which statement best describes an exception?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=SS, answer=[5]

Which statement best describes exception handling?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=SS, answer=[5]

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
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=SS, answer=[5]

What is the error message?

 - Undefined variable: `new` in /Main.php on line number 7

 - syntax error, unexpected `'new'` (T_NEW) in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - syntax error, unexpected `'extends'` (T_EXTENDS) in /DivideByZeroException.php on line number 2

 - syntax error, unexpected `'Exception'` (T_STRING), expecting `'{'` in /DivideByZeroException.php on line number 2


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - On line 4 of `DivideByZeroException.php`, the declaration `public function errorMessage()` is invalid.

 - There are no parentheses `()` after `public function errorMessage` on line 4 of `DivideByZeroException.php`.

 - There is no `class` keyword specified before `DivideByZeroException` on line 2 of `DivideByZeroException.php`.

 - On line 2 of `DivideByZeroException.php`, the declaration `class DivideByZeroException  Exception` is invalid.

 - There is no `extends` keyword specified between `DivideByZeroException` and `Exception` on line 2 of `DivideByZeroException.php`.

:::


/// type=CR, answer=[tests/CustomExceptions/MissingExtendsKeywordTest.php], filename=[Main.php,DivideByZeroException.php]

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
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Undefined variable: `new` in /Main.php on line number 7

 - syntax error, unexpected `'new'` (T_NEW) in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - syntax error, unexpected `'extends'` (T_EXTENDS) in /DivideByZeroException.php on line number 2

 - syntax error, unexpected `'Exception'` (T_STRING), expecting `'{'` in /DivideByZeroException.php on line number 2


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - On line 4 of `DivideByZeroException.php`, the declaration `public function errorMessage()` is invalid.

 - There are no parentheses `()` after `public function errorMessage` on line 4 of `DivideByZeroException.php`.

 - There is no `class` keyword specified before `DivideByZeroException` on line 2 of `DivideByZeroException.php`.

 - On line 2 of `DivideByZeroException.php`, the declaration `DivideByZeroException extends Exception` is invalid.

 - There is no `extends` keyword specified between `DivideByZeroException` and `Exception` on line 2 of `DivideByZeroException.php`.

:::


/// type=CR, answer=[tests/CustomExceptions/MissingClassKeywordTest.php], filename=[Main.php,DivideByZeroException.php]

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
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `new` in /Main.php on line number 7

 - syntax error, unexpected `'new'` (T_NEW) in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - syntax error, unexpected `'extends'` (T_EXTENDS) in /DivideByZeroException.php on line number 2

 - syntax error, unexpected `'Exception'` (T_STRING), expecting `'{'` in /DivideByZeroException.php on line number 2


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no `new` keyword specified after `throw` on line 7 of `Main.php`.

 - There is no semicolon `;` at the end of the statement on line 7 of `Main.php`.

 - There is no open curly brace `{` after the `if` construct on line 6 of `Main.php`.

 - In the `throw` statement on line 7 of `Main.php`, the `throw` keyword is misspelled as `throws`.

 - On line 7 of `Main.php`, the statement `throws new DivideByZeroException("The value '0' as a divisor is not allowed.");` is invalid.

:::


/// type=CR, answer=[tests/CustomExceptions/MisspelledThrowKeywordTest.php], filename=[Main.php,DivideByZeroException.php]

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
/// type=MS, answer=[2,3]

Execute the program. What are the error messages?

 - Undefined variable: `new` in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Uncaught Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10

 - Uncaught Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10


/// type=SS, answer=[5]

Which statement best describes the error?

 - There is no `new` keyword specified after `throw` on line 7 of `Main.php`.

 - There is no semicolon `;` at the end of the statement on line 7 of `Main.php`.

 - There is no open curly brace `{` after the `if` construct on line 6 of `Main.php`.

 - In the `throw` statement on line 7 of `Main.php`, the `throw` keyword is misspelled as `throws`.

 - There is no `require_once()` statement that includes the `DivideByNegativeException.php` file in the `Main.php` file.

:::


/// type=CR, answer=[tests/CustomExceptions/MissingRequireStatementTest.php], filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

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
/// type=MS, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `new` in /Main.php on line number 7

 - Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Uncaught Error: Class `'DivideByNegativeException'` not found in /Main.php on line number 9

 - Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10

 - Uncaught Error: Call to undefined function `DivideByNegativeException()` in /Main.php on line number 10


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 7 of `Main.php`.

 - There is no open curly brace `{` after the `if` construct on line 6 of `Main.php`.

 - On line 10 of `Main.php`, the statement `throw  DivideByNegativeException();` is invalid.

 - In the `throw` statement on line 10 of `Main.php`, the `throw` keyword is misspelled as `throws`.

 - There is no `new` keyword specified between `throw` and `DivideByNegativeException()` on line 10 of `Main.php`.

:::


/// type=CR, answer=[tests/CustomExceptions/MissingNewKeywordClassInstanceTest.php], filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

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
/// type=MS, answer=[1,2,5]

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
/// type=SS, answer=[3]

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
/// type=SS, answer=[4]

On line 18 of `Main.php`, remove `$div` from `catch (DivideByZeroException $div)`. Execute the program. What is the error message?

 - Undefined variable: `thisgetFile` in /DivideByNegativeException.php on line number 11

 - Error: Function name must be a string in /DivideByNegativeException.php on line number 11

 - syntax error, unexpected `'{'`, expecting `'('` in /DivideByZeroException.php on line number 5

 - syntax error, unexpected `')'`, expecting variable (T_VARIABLE) in /Main.php on line number 18

 - Uncaught Error: Function name must be a string in /DivideByNegativeException.php on line number 11

:::


/// type=CR, answer=[tests/CustomExceptions/CorrectMultipleErrorsTest.php], filename=[Main.php,DivideByZeroException.php,DivideByNegativeException.php]

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

/// type=CR, answer=[tests/CustomExceptions/CreateNewCustomExceptionClassTest.php], filename=[PracticeMain.php,FileNotFoundException.php]

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
