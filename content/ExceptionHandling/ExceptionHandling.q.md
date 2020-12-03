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
/// type=SS, id=7185a125-0c15-492d-a7aa-351c031c4d7d, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `divide(10, 0)`.


/// type=SS, id=5aadb346-74a8-4a96-aaea-866e9f88e74f, answer=[1]

What is the error message?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5


/// type=MS, id=cbff4dae-b9e2-45a0-b4a3-a5b2f72b3044, answer=[1,5]

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
    }

    return ($dividend / $divisor);
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, id=d43c95b7-c79f-4443-80ae-413584559f33, answer=[5]

Execute the program. What is its output?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=SS, id=9912f792-ee3e-4e5f-9afa-3764b7ab21ed, answer=[5]

Which of the following is a function?

 - `new`

 - `try`

 - `catch`

 - `return`

 - `divide()`


/// type=SS, id=5fc23c65-0c73-4d8c-9be8-148caa47a81b, answer=[2]

In the statement `throw new Exception("The value '0' as a divisor is not allowed.");` on line 5, what is `throw`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, id=79f8cd6e-2cf1-45e2-81c8-42bdb05110d5, answer=[2]

In the statement `throw new Exception("The value '0' as a divisor is not allowed.");` on line 5, what is `new`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, id=8b3abb9f-4e55-420a-996c-65586e52df72, answer=[1]

In the statement `throw new Exception("The value '0' as a divisor is not allowed.");` on line 5, what is `Exception`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=MS, id=67e9ca0a-e86d-4909-b81f-f1fe1ed91e1f, answer=[1,2,5]

On line 5, what does the statement `throw new Exception("The value '0' as a divisor is not allowed.");` do?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception if the condition `$divisor == 0` evaluates to `true`.

 - It throws an exception if the condition `$divisor == 0` evaluates to `false`.

 - It accesses the `Exception` class argument `The value '0' as a divisor is not allowed.`.

 - It creates a new object of the `Exception` class passing the argument `The value '0' as a divisor is not allowed.`.


/// type=SS, id=80b30725-3929-4a21-a815-1b8db6dd966a, answer=[2]

In the `try { echo divide(10, 0); }` block on lines 11, 12, and 13, what is `try`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, id=6a096e85-b030-4f80-bb4f-1b6a764f6e1e, answer=[5]

On lines 11, 12, and 13, what does the `try { echo divide(10, 0); }` block do?

 - It evaluates the `divide(10, 0)` function call in the `echo` statement.

 - It throws an exception when an error occurs in the `divide(10, 0)` function call.

 - It returns an exception when an error occurs in the `divide(10, 0)` function call.

 - It displays the exception message `The value '0' as a divisor is not allowed.`.

 - It facilitates the catching of a possible exception thrown by the `divide(10, 0)` function call.


/// type=SS, id=2c4c02a3-56d3-4a65-a79b-63a05334a8d1, answer=[2]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 13, 14, and 15, what is `catch`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, id=f799b3df-bc73-44cd-9fa5-92edc0d7700e, answer=[1]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 13, 14, and 15, what is `Exception`?

 - It is a class.

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a parameter.


/// type=SS, id=703bc42f-1bd3-4799-839e-934933a68ccd, answer=[5]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 13, 14, and 15, what is `$e`?

 - It is a class.

 - It is a method.

 - It is a keyword.

 - It is a parameter.

 - It is an instance of the `Exception` class.


/// type=SS, id=3f7fb2fa-faf4-4348-b025-14687a3432a6, answer=[5]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 13, 14, and 15, what does `Exception $e` do?

 - It displays the value of the `$e` object.

 - It sets the value of the `Exception` class to `$e`.

 - It returns the `$e` object of the `Exception` class.

 - It accesses the value of `$e` in the `Exception` class.

 - It creates the `$e` object as an instance of the `Exception` class.


/// type=SS, id=43361ac8-3f6c-4dc7-b20e-231f16b22896, answer=[4]

In the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block on lines 13, 14, and 15, what does `$e->getMessage()` do?

 - It returns the `getMessage()` method of the `$e` object.

 - It creates the `getMessage()` method of the `$e` object.

 - It displays the `getMessage()` method of the `$e` object.

 - It accesses the `getMessage()` method of the `$e` object.

 - It removes the `getMessage()` method of the `$e` object.


/// type=MS, id=f7105568-7eaf-4926-89ee-c8095c3363dc, answer=[1,4]

On lines 13, 14, and 15, what does the `catch (Exception $e) { echo "Exception caught: " . $e->getMessage(); }` block do?

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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=3bb18743-814c-44ed-a313-5a87ad935b77, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It prints `hello`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: [0] The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: Invalid argument value provided in /index.php on line number 5`.


/// type=MS, id=699e4658-0f13-46ce-bc78-b3d747f44881, answer=[4,5]

Which of the following are exception classes?

 - `catch`

 - `throw`

 - `divide()`

 - `Exception`

 - `InvalidArgumentException`


/// type=MS, id=bc33de8d-2b1d-42d7-8e46-a90537529a93, answer=[1,2,3]

Which of the following are method calls?

 - `$e->getCode()`

 - `$ie->getFile()`

 - `$ie->getMessage()`

 - `divide(10, "hello")`

 - `InvalidArgumentException $ie`


/// type=MS, id=8ada7d0b-7d46-4f97-9dd1-e68c61116528, answer=[1,2]

Which of the following are keywords?

 - `catch`

 - `throw`

 - `divide()`

 - `Exception`

 - `InvalidArgumentException`


/// type=SS, id=47533045-9af8-462c-b5af-6d88766515f8, answer=[3]

What value is returned by `$ie->getMessage()` on line 18?

 - `5`

 - `/index.php`

 - `Invalid argument value provided`

 - `The value '0' as a divisor is not allowed.`

 - `Invalid argument value provided in /index.php on line number 5`


/// type=SS, id=d60f951a-5a50-434a-9eed-6a304244f4df, answer=[2]

What value is returned by `$ie->getFile()` on line 18?

 - `5`

 - `/index.php`

 - `Invalid argument value provided`

 - `The value '0' as a divisor is not allowed.`

 - `Invalid argument value provided in /index.php on line number 5`


/// type=SS, id=117ab073-8ae1-4769-b734-ff88146bff0b, answer=[1]

What value ir returned by `$ie->getLine()` on line 18?

 - `5`

 - `/index.php`

 - `Invalid argument value provided`

 - `The value '0' as a divisor is not allowed.`

 - `Invalid argument value provided in /index.php on line number 5`


/// type=MS, id=20f7e0a2-2d48-44d5-bffd-e6fe8f585e55, answer=[3,5]

Which statements correctly describe the `if` block on lines 4, 5, and 6?

 - It catches an exception when the condition evaluates to `true`.

 - It displays the exception message `Invalid argument value provided`.

 - It throws an `InvalidArgumentException` object when the condition evaluates to `true`.

 - It throws an `InvalidArgumentException` object when the condition evaluates to `false`.

 - It evaluates the conditional expression `!is_numeric($divisor) || !is_numeric($dividend)`.


/// type=MS, id=be788413-a4e8-49ea-9b58-2446197e0111, answer=[1,3]

Which statements correctly describe the `if` block on lines 8, 9, and 10?

 - It evaluates the conditional expression `$divisor == 0`.

 - It catches an exception when the condition evaluates to `true`.

 - It throws an `Exception` object when the condition evaluates to `true`.

 - It throws an `Exception` object when the condition evaluates to `false`.

 - It displays the exception message `The value '0' as a divisor is not allowed.`.


/// type=MS, id=a3331b4b-c141-4311-ae27-663ebd4c839a, answer=[4,5]

Which statements correctly describe the `catch` block on lines 17 and 18?

 - It enables the `divide()` function to throw an exception if an error occurs.

 - It throws an exception when an error occurs in `InvalidArgumentException $ie`.

 - It returns an exception when an error occurs in `InvalidArgumentException $ie`.

 - It catches the possible `InvalidArgumentException` exception that occurs in the `try` block.

 - It executes the `echo` statement if an `InvalidArgumentException` exception occurs in the `try` block.


/// type=MS, id=dae0d2ce-56f8-472c-a504-fca718ee561e, answer=[3,5]

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
    }
    
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=d9f3eef9-489a-4bf2-a28a-56785cd4fee3, answer=[1]

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
    }
    
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=34cf43aa-02f2-4a01-a3ec-f66f92d1f668, answer=[4]

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
    }
    
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=af0f81f8-dd10-43ea-a997-c22b44849a89, answer=[5]

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

/// type=SS, id=6087d4e4-7fc3-4d49-a83f-94c54bcaffd1, answer=[4]

Which statement best describes an exception?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=SS, id=251cb971-495b-42c8-835a-6ed81f5911fe, answer=[5]

Which statement best describes exception handling?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=MS, id=3fc24fa9-6c73-4382-a1c6-29f278d1a14e, answer=[2,3,4]

Which of the following are exception handling keywords?

 - `new`

 - `try`

 - `catch`

 - `thrown`

 - `return`


/// type=SS, id=f365e739-3cc8-4896-ba4f-fdebc24775df, answer=[2]

Which statement is true about the `Exception` class?

 - It is used to throw an exception.

 - It is a parent class of all PHP Exception classes.

 - It is a keyword that facilitates the catching of a possible exception.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=MS, id=b99db641-8a0d-4a80-82ec-d39c837ccb38, answer=[1,2,3,5]

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
    }

    return ($dividend / $divisor);
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, id=858a3c25-66d5-4f03-88d6-a377536d5ed3, answer=[2]

Execute the program. What is its output?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `The value '0' as a divisor is not allowed.`.

 - It prints `Exception caught: The value '0' as a divisor is not allowed.`.


/// type=SS, id=c070a0d4-91a4-4155-a5cc-9a3dc44adad2, answer=[1]

What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 12

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 13

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 17

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 16


/// type=MS, id=412efeae-0e68-48d1-bed3-5a07210ebb66, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - There is no `new` keyword specified between `throw` and `Exception` on line 5.

 - On line 5, the argument in the `Exception` class constructor is enclosed in double quotes `""`.

 - On line 5, the statement `throw  Exception("The value '0' as a divisor is not allowed.");` is invalid.

:::


/// type=CR, id=8cf386cf-04e1-4e3d-be8c-ee49330b3b00, answer=[tests/ExceptionHandling/8cf386cf-04e1-4e3d-be8c-ee49330b3b00]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw  Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
    }

    return ($dividend / $divisor);
}

try {
    echo divide(10, 0);
} catch (Exception ) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, id=9f15d684-d006-489a-a015-962a9c17d6f6, answer=[3]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 12

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 13

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 17

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 16


/// type=MS, id=5bc3aa8e-52b2-4aaf-8a2c-d416bc6a8356, answer=[1,4,5]

Which statements correctly describe the error?

 - On line 13, `catch (Exception )` is invalid.

 - There is an open parenthesis `(` after `catch` on line 13.

 - There is no open curly brace `{` after `catch (Exception )` on line 13.

 - There is no variable named `$e` specified after `Exception` within `catch()` on line 13.

 - There is no variable specified as an instance of the `Exception` class within `catch()` on line 13.

:::


/// type=CR, id=717bca2b-70ed-4275-913d-aa78ff010226, answer=[tests/ExceptionHandling/717bca2b-70ed-4275-913d-aa78ff010226]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
    }

    return ($dividend / $divisor);
}

try 
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
```
/// type=SS, id=e88149ac-6a2b-4003-a3cd-8891260e695b, answer=[2]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 12

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 13

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 15

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 14


/// type=SS, id=94f94aaf-8d4a-417e-9637-49ed6e91b719, answer=[3]

Which statement best describes the error?

 - There are no parentheses `()` after the `try` keyword on line 11.

 - There is no semicolon `;` at the end of the statement on line 12.

 - There is no open curly brace `{` after the `try` keyword on line 11.

 - On line 12, the `divide()` function requires three arguments when called.

 - There is no comma `,` between the arguments `10` and `0` in the `divide()` function call on line 12.

:::


/// type=CR, id=81bfec02-52b5-4039-a7c2-14e44c6f3d5f, answer=[tests/ExceptionHandling/81bfec02-52b5-4039-a7c2-14e44c6f3d5f]

Correct the code so that it outputs the string `Exception caught: The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=5c57d178-df85-4d48-b634-3e73bd25d45e, answer=[5]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 11

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 14

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=MS, id=e7be3a5a-7ddd-428c-9418-e94954beb9b4, answer=[1,5]

Which statements correctly describe the error?

 - On line 17, the variable `ie` does not start with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 18.

 - There is no open curly brace `{` after the `try` keyword on line 15.

 - There are no parentheses `()` after the `catch` keyword on line 17.

 - On line 17, `catch (InvalidArgumentException ie)` is invalid.

:::


/// type=CR, id=67013dfd-ae88-4ba4-8ef4-357b4e415596, answer=[tests/ExceptionHandling/67013dfd-ae88-4ba4-8ef4-357b4e415596]

Correct the code so that it outputs the string `Exception caught: Invalid argument value provided in /index.php on line number 5`.

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
    }
    
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
    }
    
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=9330951a-bdea-400f-83cc-c28057053a33, answer=[4]

Execute the program. What is the error message?

 - Uncaught Error: Call to undefined function `Exception()` on line number 5

 - syntax error, unexpected `'echo'` (T_ECHO), expecting `'{'` on line number 11

 - syntax error, unexpected `')'`, expecting `'|'` or variable (T_VARIABLE) on line number 12

 - syntax error, unexpected `'getFile'` (T_STRING), expecting `','` or `';'` on line number 18

 - syntax error, unexpected `'ie'` (T_STRING), expecting `'|'` or variable (T_VARIABLE) on line number 17


/// type=MS, id=4b34e967-5250-469b-8d76-ccff1187b5f8, answer=[3,5]

Which statements correctly describe the error?

 - On line 18, the variable `ie` does not start with a dollar sign `$`.

 - There is no semicolon `;` at the end of the statement on line 18.

 - On line 18, the method call `$ie getFile()` in the `echo` statement is invalid.

 - There is no concatenation operator `.` between `$ie` and `getFile()` on line 18.

 - There is no object operator `->` specified between `$ie` and `getFile()` on line 18.

:::


/// type=CR, id=5114fcb0-bfd6-4626-b851-3adeeb23904f, answer=[tests/ExceptionHandling/5114fcb0-bfd6-4626-b851-3adeeb23904f]

Correct the code so that it outputs the string `Exception caught: Invalid argument value provided in /index.php on line number 5`.

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=810c4a46-5df2-4e62-8909-4eb21784e388, answer=[3]

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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=145aa515-3185-4958-8365-4b29f0f7fe9d, answer=[1]

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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=08cdc8ab-30be-4103-925b-015eacac94db, answer=[2]

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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=13c1a4f1-9dd4-4599-92b2-f05746e0f9a6, answer=[4]

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
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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
/// type=SS, id=a42c2399-6eb1-4530-8956-38054ac2de1b, answer=[5]

Remove the comma `,` between the arguments `10` and `0` from the `divide()` function call on line 16. Execute the program. What is the error message?

 - syntax error, unexpected `'catch'` (T_CATCH) on line number 19

 - syntax error, unexpected `'{'`, expecting `')'` on line number 17

 - Notice: Undefined property: `Exception::$getCode` on line number 20

 - syntax error, unexpected `'catch'` (T_CATCH), expecting end of file on line number 17

 - syntax error, unexpected `'0'` (T_LNUMBER), expecting `','` or `')'` on line number 16

:::


/// type=CR, id=a60cae27-85b5-454e-a428-fa0fc1154082, answer=[tests/ExceptionHandling/a60cae27-85b5-454e-a428-fa0fc1154082]

Correct the code so that it outputs the string `Exception caught: [0] The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if (!is_numeric($divisor) || !is_numeric($dividend)) {
        throw new InvalidArgumentException("Invalid argument value provided");
    }

    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
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

/// type=CR, id=de4d4385-fe7b-4417-bd1d-077381d10c9b, answer=[tests/ExceptionHandling/de4d4385-fe7b-4417-bd1d-077381d10c9b]

Write a program that uses `throw`, `try`, and `catch` keywords to handle exceptions gracefully. First, create a funtion named `openFile()` with the parameter `$file`. Inside the function body, create an `if-else` statement to test if `$file` exists or not. In the `if` construct, add the condition `!file_exists($file)`. Inside the `if` block, add the statement `throw new Exception("Sorry, the file does not exist");`. Inside the `else` block, add the statement `fopen($file, "w");`. Next, Add a `try` and `catch` block. Inside the `try` block, add the statement `openFile("myTest.txt");` Then, add the `catch` block `catch (Exception $e) { echo "Exception caught: " . $e->getMessage() . " in " . $e->getFile() . " on line number " . $e->getLine(); }`. Run the program to view the output.

```php
<?php



?>
```

+++
