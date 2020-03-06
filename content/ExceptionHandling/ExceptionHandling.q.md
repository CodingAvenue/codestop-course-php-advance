# Exception Handling

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

echo divide(10, 0);
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `divide(10, 0)`.


/// type=SS, answer=[1]

What is the error message?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - Dividing any number by zero is not allowed.

 - There is no comma `,` between `10` and `0` on line 7.

 - There is no semicolon `;` at the end of the statement on line 7.

 - On line 4, the return statement `return ($dividend / $divisor);` is invalid.

 - On line 7, the second argument `0` in the function call `divide(10, 0)` is invalid.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=SS, answer=[5]

Which of the following is a function?

 - `new`

 - `try`

 - `catch`

 - `return`

 - `divide()`


/// type=SS, answer=[2]

In the statement `throw new Exception("The value '0' as a divisor is not allowed.");` on line 5, what is `throw`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, answer=[2]

In the statement `throw new Exception("The value '0' as a divisor is not allowed.");` on line 5, what is `new`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, answer=[1]

In the statement `throw new Exception("The value '0' as a divisor is not allowed.");` on line 5, what is `Exception`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=MS, answer=[1,2,5]

On line 5, what does the statement `throw new Exception("The value '0' as a divisor is not allowed.");` do?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception if the condition `$divisor == 0` evaluates to `true`.

 - It throws an exception if the condition `$divisor == 0` evaluates to `false`.

 - It accesses the `Exception` class argument `The value '0' as a divisor is not allowed.`.

 - It creates a new object of the `Exception` class passing the argument `The value '0' as a divisor is not allowed.`.


/// type=SS, answer=[2]

In the `try { echo divide(10, 0); }` block on lines 12, 13, and 14, what is `try`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, answer=[5]

On lines 12, 13, and 14, what does the `try { echo divide(10, 0); }` block do?

 - It evaluates the `divide(10, 0)` function call in the `echo` statement.

 - It throws an exception when an error occurs in the `divide(10, 0)` function call.

 - It returns an exception when an error occurs in the `divide(10, 0)` function call.

 - It displays the exception message `The value '0' as a divisor is not allowed.`.

 - It facilitates the catching of a possible exception thrown by the `divide(10, 0)` function call.


/// type=SS, answer=[2]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 14, 15, and 16, what is `catch`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, answer=[1]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 14, 15, and 16, what is `Exception`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, answer=[5]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 14, 15, and 16, what is `$e`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a parameter.

 - It is an instance of the `Exception` class.


/// type=SS, answer=[5]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 14, 15, and 16, what does `Exception $e` do?

 - It displays the value of the `$e` object.

 - It sets the value of the `Exception` class to `$e`.

 - It returns the `$e` object of the `Exception` class.

 - It accesses the value of `$e` in the `Exception` class.

 - It creates the `$e` object as an instance of the `Exception` class.


/// type=SS, answer=[4]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 14, 15, and 16, what does `$e->getMessage()` do?

 - It returns the `getMessage()` method of the `$e` object.

 - It creates the `getMessage()` method of the `$e` object.

 - It displays the `getMessage()` method of the `$e` object.

 - It accesses the `getMessage()` method of the `$e` object.

 - It removes the `getMessage()` method of the `$e` object.


/// type=MS, answer=[1,4]

On lines 14, 15, and 16, what does the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block do?

 - It catches the possible exception that occurs in the `try` block.

 - It throws an exception when an error occurs in `Exception $e`.

 - It returns an exception when an error occurs in `Exception $e`.

 - It executes the `echo` statement if an exception occurs in the `try` block.

 - It enables the `divide()` function to throw an exception if an error occurs.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `hello`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: [0] The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: Invalid argument value provided in /index.php on line number 5`.


/// type=MS, answer=[4,5]

Which of the following are exception classes?

 - `catch`

 - `throw`

 - `divide()`

 - `Exception`

 - `InvalidArgumentException`


/// type=MS, answer=[1,2,3]

Which of the following are method calls?

 - `$e->getCode()`

 - `$ie->getFile()`

 - `$ie->getMessage()`

 - `divide(10, "hello")`

 - `InvalidArgumentException $ie`


/// type=MS, answer=[1,2]

Which of the following are keywords?

 - `catch`

 - `throw`

 - `divide()`

 - `Exception`

 - `InvalidArgumentException`


/// type=SS, answer=[3]

What value is returned by `$ie->getMessage()` on line 18?

 - `5`

 - `/index.php`

 - `Invalid argument value provided`

 - `The value '0' as a divisor is not allowed.`

 - `Invalid argument value provided in /index.php on line number 5`


/// type=SS, answer=[2]

What value is returned by `$ie->getFile()` on line 18?

 - `5`

 - `/index.php`

 - `Invalid argument value provided`

 - `The value '0' as a divisor is not allowed.`

 - `Invalid argument value provided in /index.php on line number 5`


/// type=SS, answer=[1]

What value ir returned by `$ie->getLine()` on line 18?

 - `5`

 - `/index.php`

 - `Invalid argument value provided`

 - `The value '0' as a divisor is not allowed.`

 - `Invalid argument value provided in /index.php on line number 5`


/// type=MS, answer=[3,5]

Which statements correctly describe the `if` block on lines 4, 5, and 6?

 - It catches an exception when the condition evaluates to `true`.

 - It displays the exception message `Invalid argument value provided`.

 - It throws an `InvalidArgumentException` object when the condition evaluates to `true`.

 - It throws an `InvalidArgumentException` object when the condition evaluates to `false`.

 - It evaluates the conditional expression `!is_numeric($divisor) || !is_numeric($dividend)`.


/// type=MS, answer=[1,3]

Which statements correctly describe the `elseif` block on lines 7, 8, and 9?

 - It evaluates the conditional expression `$divisor == 0`.

 - It catches an exception when the condition evaluates to `true`.

 - It throws an `Exception` object when the condition evaluates to `true`.

 - It throws an `Exception` object when the condition evaluates to `false`.

 - It displays the exception message `The value '0' as a divisor is not allowed.`.


/// type=MS, answer=[4,5]

Which statements correctly describe the `catch` block on lines 17 and 18?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `InvalidArgumentException $ie`.

 - It returns an exception when an error occurs in `InvalidArgumentException $ie`.

 - It catches the possible `InvalidArgumentException` exception that occurs in the `try` block.

 - It executes the `echo` statement if an `InvalidArgumentException` exception occurs in the `try` block.


/// type=MS, answer=[3,5]

Which statements correctly describe the `catch` block on lines 19 and 20?

 - It throws an exception when an error occurs in `Exception $e`.

 - It returns an exception when an error occurs in `Exception $e`.

 - It catches the possible `Exception` exception that occurs in the `try` block.

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It executes the `echo` statement if an `Exception` exception occurs in the `try` block.

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[1]

In the function call `divide(10, "hello")` on line 16, replace `"hello"` with `5`. Execute the program. What is its output?

 - It prints `2`.

 - It prints `10`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: [0] The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: Invalid argument value provided in /index.php on line number 5`.

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 5);
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[4]

In the function call `divide(10, 5)` on line 16, replace `5` with `0`. Execute the program. What is its output?

 - It prints `10`.

 - It prints `hello`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: [0] The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: Invalid argument value provided in /index.php on line number 5`.

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[5]

In the function call `divide(10, 0)` on line 16, replace `10` with `"test"`. Execute the program. What is its output?

 - It prints `0`.

 - It prints `test`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: [0] The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: Invalid argument value provided in /index.php on line number 5`.

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


/// type=MS, answer=[2,3,4]

Which of the following are exception handling keywords?

 - `new`

 - `try`

 - `catch`

 - `thrown`

 - `return`


/// type=SS, answer=[2]

Which statement is true about the `Exception` class?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=MS, answer=[1,2,3,5]

Which of the following are the methods of the `Exception` class?

 - `getCode()`

 - `getFile()`

 - `getLine()`

 - `getError()`

 - `getMessage()`


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw  Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=SS, answer=[1]

What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 13

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 14

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - There is no `new` keyword specified between `throw` and `Exception` on line 5.

 - On line 5, the argument in the `Exception` class constructor is enclosed in double quotes `""`.

 - On line 5, the statement `throw  Exception("The value '0' as a divisor is not allowed.");` is invalid.

:::


/// type=CR, answer=[tests/ExceptionHandling/MissingNewInTheThrowStatementTest.php]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw  Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (Exception ) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 13

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 14

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=MS, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 14, `catch (Exception )` is invalid.

 - There is an open parenthesis `(` after `catch` on line 14.

 - There is no open curly brace `{` after `catch (Exception )` on line 14.

 - There is no variable named `$e` specified after `Exception` within `catch()` on line 14.

 - There is no variable specified as an instance of the `Exception` class within `catch()` on line 14.

:::


/// type=CR, answer=[tests/ExceptionHandling/MissingExceptionInstanceVariableInCatchTest.php]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (Exception ) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try 
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 13

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 14

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=SS, answer=[3]

Which statement best describes the error?

 - There are no parentheses `()` after the `try` keyword on line 12.

 - There is no semicolon `;` at the end of the statement on line 13.

 - There is no open curly brace `{` after the `try` keyword on line 12.

 - On line 13, the `divide()` function requires three arguments when called.

 - There is no comma `,` between the arguments `10` and `0` in the `divide()` function call on line 13.

:::


/// type=CR, answer=[tests/ExceptionHandling/MissingOpenCurlyBraceAfterTryTest.php]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try 
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 13

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 14

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 17, the variable `ie` does not start with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 18.

 - There is no open curly brace `{` after the `try` keyword on line 15.

 - There are no parentheses `()` after the `catch` keyword on line 17.

 - On line 17, `catch (InvalidArgumentException ie)` is invalid.

:::


/// type=CR, answer=[tests/ExceptionHandling/MissingDollarSignOnObjectVariableTest.php]

Correct the code so that it outputs the string `Exception caught: Invalid argument value provided in /index.php on line number 5`.

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 13

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 14

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - On line 18, the variable `ie` does not start with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 18.

 - On line 18, the method call `$ie getFile()` in the `echo` statement is invalid.

 - There is no concatenation operator `.` between `$ie` and `getFile()` on line 18.

 - There is no object operator `->` specified between `$ie` and `getFile()` on line 18.

:::


/// type=CR, answer=[tests/ExceptionHandling/MissingObjectOperatorOnMethodCallTest.php]

Correct the code so that it outputs the string `Exception caught: Invalid argument value provided in /index.php on line number 5`.

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, "hello");
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode() . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[3]

Remove the parentheses `()` from `$e->getCode()` in the `echo` statement on line 20. Execute the program. What is the error message?

 - syntax error, unexpected `'catch'` (T_CATCH) on line number 19

 - syntax error, unexpected `'{'`, expecting `')'` on line number 17

 - Notice: Undefined property: `Exception::$getCode` on line number 20

 - syntax error, unexpected `'catch'` (T_CATCH), expecting end of file on line number 17

 - syntax error, unexpected `'0'` (T_LNUMBER), expecting `','` or `')'` on line number 16

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
} catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[1]

Remove the close curly brace `}` before `catch` on line 19. Execute the program. What is the error message?

 - syntax error, unexpected `'catch'` (T_CATCH) on line number 19

 - syntax error, unexpected `'{'`, expecting `')'` on line number 17

 - Notice: Undefined property: `Exception::$getCode` on line number 20

 - syntax error, unexpected `'catch'` (T_CATCH), expecting end of file on line number 17

 - syntax error, unexpected `'0'` (T_LNUMBER), expecting `','` or `')'` on line number 16

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (InvalidArgumentException $ie) {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
 catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[2]

Remove the close parenthesis `)` after `$ie` on line 17. Execute the program. What is the error message?

 - syntax error, unexpected `'catch'` (T_CATCH) on line number 19

 - syntax error, unexpected `'{'`, expecting `')'` on line number 17

 - Notice: Undefined property: `Exception::$getCode` on line number 20

 - syntax error, unexpected `'catch'` (T_CATCH), expecting end of file on line number 17

 - syntax error, unexpected `'0'` (T_LNUMBER), expecting `','` or `')'` on line number 16

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

try {
    echo divide(10, 0);
} catch (InvalidArgumentException $ie {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
 catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[4]

Remove the `try` keyword before the open curly brace `{` on line 15. Execute the program. What is the error message?

 - syntax error, unexpected `'catch'` (T_CATCH) on line number 19

 - syntax error, unexpected `'{'`, expecting `')'` on line number 17

 - Notice: Undefined property: `Exception::$getCode` on line number 20

 - syntax error, unexpected `'catch'` (T_CATCH), expecting end of file on line number 17

 - syntax error, unexpected `'0'` (T_LNUMBER), expecting `','` or `')'` on line number 16

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

 {
    echo divide(10, 0);
} catch (InvalidArgumentException $ie {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
 catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode . "] " . $e->getMessage();
}
?>
```
/// type=SS, answer=[5]

Remove the comma `,` between the arguments `10` and `0` from the `divide()` function call on line 16. Execute the program. What is the error message?

 - syntax error, unexpected `'catch'` (T_CATCH) on line number 19

 - syntax error, unexpected `'{'`, expecting `')'` on line number 17

 - Notice: Undefined property: `Exception::$getCode` on line number 20

 - syntax error, unexpected `'catch'` (T_CATCH), expecting end of file on line number 17

 - syntax error, unexpected `'0'` (T_LNUMBER), expecting `','` or `')'` on line number 16

:::


/// type=CR, answer=[tests/ExceptionHandling/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `Exception caught: [0] The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
        return false;
    } elseif ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

 {
    echo divide(10 0);
} catch (InvalidArgumentException $ie {
    echo "Exception caught: " . $ie->getMessage() . " in " . $ie->getFile() . " on line number " . $ie->getLine();
 catch (Exception $e) {
    echo "Exception caught: [" . $e->getCode . "] " . $e->getMessage();
}
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/ExceptionHandling/CreateFunctionThatThrowsExceptionTest.php]

Write a program that uses `throw`, `try`, and `catch` keywords to handle exceptions gracefully. First, create a funtion named `OpenFile()` with the parameter `$file`. Inside the function body, create an `if-else` statement to test if `$file` exists or not. In the `if` construct, add the condition `!file_exists($file)`. Inside the `if` block, add the statement `throw new Exception("Sorry, the file does not exist");`. Inside the `else` block, add the statement `fopen($file, "w");`. Next, Add a `try` and `catch` block. Inside the `try` block, add the statement `OpenFile("myTest.txt");` Then, add the `catch` block `catch (Exception $e) { echo "Exception caught: " . $e->getMessage() . " in " . $e->getFile() . " on line number " . $e->getLine(); }`. Run the program to view the output.

```php
<?php



?>
```

+++
