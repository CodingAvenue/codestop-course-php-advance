# Error Handling

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    return($dividend / $divisor);
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Divide(10, 0)`.


/// type=SS, answer=[1]

What is the error message?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - Dividing any number by zero is not allowed.

 - There is no comma `,` between `10` and `0` on line 7.

 - There is no semicolon `;` at the end of the statement on line 7.

 - On line 4, the return statement `return($dividend / $divisor);` is invalid.

 - On line 7, the second argument `0` in the function call `Divide(10, 0)` is invalid.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die("Divide(): The value '0' as a divisor is not allowed.");
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Divide(): The value '0' as a divisor is not allowed.`.


/// type=MS, answer=[4,5]

Which of the following are parameters?

 - `0`

 - `10`

 - `Divide()`

 - `$divisor`

 - `$dividend`


/// type=MS, answer=[1,2]

Which of the following are arguments?

 - `0`

 - `10`

 - `Divide()`

 - `$divisor`

 - `$dividend`


/// type=SS, answer=[5]

In the statement `die("Divide(): The value '0' as a divisor is not allowed.");` on line 5, what is `die()`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=MS, answer=[1,5]

On line 5, what does the `die()` function do?

 - It terminates the program if an error occurs.

 - It registers the custom error handling function.

 - It calls the error handling function in the program.

 - It creates the error message `Divide(): The value '0' as a divisor is not allowed.`.

 - It prints the error message `Divide(): The value '0' as a divisor is not allowed.` if an error occurred.


/// type=MS, answer=[1,2,5]

Which statements correctly describe the `Divide()` function?

 - It is a user-defined function that returns a value.

 - It uses the `die()` function to properly handle an error.

 - It is a user-defined function that requires one argument.

 - It is a user-defined function that does not return a value.

 - It is a user-defined function that requires two arguments.


:::


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Divide(): The value '0' as a divisor is not allowed.`.

 - It prints `Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.


/// type=SS, answer=[5]

In the statement `trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what is `trigger_error()`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=SS, answer=[4]

In the statement `trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what is `E_USER_WARNING`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=SS, answer=[4]

In the statement `trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what does `E_USER_WARNING` do?

 - It specifies the non-fatal runtime error.

 - It specifies the user-generated notice message.

 - It specifies the fatal user-generated error message.

 - It specifies the non-fatal user-generated warning message.

 - It specifies the non-fatal user-generated warning message.


/// type=SS, answer=[5]

In the statement `trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what does the `trigger_error()` function do?

 - It generates an error report at runtime.

 - It terminates the program if an error occurs.

 - It registers the custom error handling function.

 - It calls the error handling function in the program.

 - It generates the user-defined error message `Divide(): The value '0' as a divisor is not allowed` to an exception at runtime.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    return($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo Divide(10, 0);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `Please try again.`.

 - It prints `Error: [2] Division by zero`.

 - It prints `Error: [2] Division by zero` and `Please try again.` in separate lines.


/// type=SS, answer=[1]

In the function declaration `function myErrorHandler($error_no, $error_msg)` on line 7, what is `$error_no`?

 - It is a parameter that specifies the error report level.

 - It is a parameter that specifies the user-defined error message.

 - It is a parameter that specifies the line number where the error occurred.

 - It is a parameter that specifies the name of the file where the error occurred.

 - It is a parameter that specifies the array containing every variable and their values in use when the error occurred.


/// type=SS, answer=[2]

In the function declaration `function myErrorHandler($error_no, $error_msg)` on line 7, what is `$error_msg`?

 - It is a parameter that specifies the error report level.

 - It is a parameter that specifies the user-defined error message.

 - It is a parameter that specifies the line number where the error occurred.

 - It is a parameter that specifies the name of the file where the error occurred.

 - It is a parameter that specifies the array containing every variable and their values in use when the error occurred.


/// type=MS, answer=[1,5]

Which statements correctly describe `die("\nPlease try again.");` on line 11?

 - It terminates the program if an error occurs.

 - It registers the custom error handling function.

 - It creates the error message `Please try again.`.

 - It calls the error handling function in the program.

 - It prints the error message `Please try again.` if an error occurs.


/// type=MS, answer=[1,3,4,5]

Which statements correctly describe the `myErrorhandler()` function?

 - It is a custom error handling function.

 - It is a user-defined function that returns a value.

 - It is a user-defined function that does not return a value.

 - It is a user-defined error handling function that has two parameters `$error_no` and `$error_msg`.

 - It displays the strings `Error: [2] Division by zero` and `Please try again.` in separate lines.


/// type=SS, answer=[5]

In the statement `set_error_handler("myErrorHandler");` on line 14, what is `set_error_handler()`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=SS, answer=[4]

On line 14, what does `set_error_handler("myErrorHandler");` do?

 - It terminates the program if an error occurs.

 - It creates the error message `myErrorHandler`.

 - It prints the error message `myErrorHandler` if an error occurs.

 - It registers the custom error handling function named `myErrorHandler`.

 - It calls the error handling function named `myErrorHandler` if an error occurs.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo Divide(10, 0);
?>
```
/// type=MS, answer=[4,5]

Execute the program. What are its outputs?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `Please try again.`.

 - It prints `Error: [512] Divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.


/// type=MS, answer=[1,4,5]

Which of the following are error handling functions?

 - `die()`

 - `Divide()`

 - `E_USER_WARNING`

 - `trigger_error()`

 - `set_error_handler()`


/// type=MS, answer=[2,3,4]

Which of the following are parameters?

 - `Divide()`

 - `$error_no`

 - `$error_msg`

 - `$error_file`

 - `myErrorHandler()`


/// type=SS, answer=[5]

Which of the following is a custom error handling function?

 - `Divide()`

 - `$error_no`

 - `E_USER_WARNING`

 - `trigger_error()`

 - `myErrorHandler()`


/// type=SS, answer=[3]

Which of the following is an error constant?

 - `Divide()`

 - `$error_no`

 - `E_USER_WARNING`

 - `trigger_error()`

 - `myErrorHandler()`


/// type=SS, answer=[4]

In the function declaration `function myErrorHandler($error_no, $error_msg, $error_file, $error_line)` on line 12, what does the `$error_file` parameter specify?

 - The error report level.

 - The user-defined error message.

 - The line number where the error occurred.

 - The name of the file where the error occurred.

 - The array containing every variable and their values in use when the error occurred.


/// type=SS, answer=[3]

In the function declaration `function myErrorHandler($error_no, $error_msg, $error_file, $error_line)` on line 12, what does the `$error_line` parameter specify?

 - The error report level.

 - The user-defined error message.

 - The line number where the error occurred.

 - The name of the file where the error occurred.

 - The array containing every variable and their values in use when the error occurred.


/// type=MS, answer=[1,3,4,5]

Which statements correctly describe the `myErrorHandler()` function?

 - It is a custom error handling function.

 - It is a user-defined function that returns a value.

 - It is a user-defined function that does not return a value.

 - It is a user-defined error handling function that has four parameters `$error_no`, `$error_msg`, `$error_file`, and `$error_line`.

 - It displays the strings `Error: [512] Divide(): The value '0' as a divisor is not allowed in /index.php on line 5` and `Please try again.` in separate lines.


:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[4]

Which statement best describes an error?

 - It is a built-in error handling function.

 - It is a user-defined error handling function.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is a type of condition that occurs in a program for having incorrect syntax or logic.

 - It can have the parameters `error level`, `error message`, `error_file`, and `error_line`.


/// type=SS, answer=[3]

Which statement is true about error handling?

 - It is a built-in error handling function.

 - It is a user-defined error handling function.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is a type of condition that occurs in a program for having incorrect syntax or logic.

 - It can have the parameters `error level`, `error message`, `error_file`, and `error_line`.


/// type=MS, answer=[2,5]

Which statements correctly describe the custom error handling function?

 - It is a built-in error handling function.

 - It is a user-defined error handling function.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is a type of condition that occurs in a program for having incorrect syntax or logic.

 - It can have the parameters `error level`, `error message`, `error_file`, and `error_line`.


/// type=MS, answer=[1,2,3,5]

Which of the following are types of error?

 - `Fatal Error`

 - `Syntax Error`

 - `Notice Error`

 - `Runtime Error`

 - `Warning Error`


/// type=SS, answer=[1]

Which statement best describes the `set_error_handler()` function?

 - It registers a custom error handling function.

 - It specifies the name of the file where the error occurred.

 - It generates a user-defined error message to an exception at runtime.

 - It prints the specified error message before terminating the program execution.

 - It specifies the array containing every variable and their values in use when the error occurred.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die(Divide(): The value '0' as a divisor is not allowed.);
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `Divide(): The value '0' as a divisor is not allowed.`.


/// type=SS, answer=[2]

What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"Divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no open parenthesis `(` after `die` on line 5.

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `die(Divide(): The value '0' as a divisor is not allowed.)` is invalid.

 - On line 5, the string `Divide(): The value '0' as a divisor is not allowed.` is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/ErrorHandling/MissingDoubleQuotesTest.php]

Correct the code so that it outputs the string `Divide(): The value '0' as a divisor is not allowed.`.

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die(Divide(): The value '0' as a divisor is not allowed.);
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die"Divide(): The value '0' as a divisor is not allowed.");
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"Divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, answer=[1,4]

Which statements correctly describe the error?

 - There is no open parenthesis `(` after `die` on line 5.

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `die"Divide(): The value '0' as a divisor is not allowed.")` is invalid.

 - On line 5, the string `Divide(): The value '0' as a divisor is not allowed.` is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/ErrorHandling/MissingOpenParenthesisOnDieTest.php]

Correct the code so that it outputs the string `Divide(): The value '0' as a divisor is not allowed.`.

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die"Divide(): The value '0' as a divisor is not allowed.");
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed" E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"Divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open parenthesis `(` after `trigger_error` on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `trigger_error("Divide(): The value '0' as a divisor is not allowed" E_USER_WARNING)` is invalid.

 - There is no comma `,` between `Divide(): The value '0' as a divisor is not allowed` and `E_USER_WARNING` on line 5.

:::


/// type=CR, answer=[tests/ErrorHandling/MissingCommaBetweenArgumentsTest.php]

Correct the code so that it outputs the string `Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed" E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error( , E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"Divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open parenthesis `(` after `trigger_error` on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `trigger_error( , E_USER_WARNING)` is invalid.

 - There is no error message specified as the first argument of the `trigger_error()` function call on line 5.

:::


/// type=CR, answer=[tests/ErrorHandling/MissingCommaBetweenArgumentsTest.php]

Correct the code so that it outputs the string `Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error(, E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

echo Divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    return($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler(myErrorHandler);
echo Divide(10, 0);
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Notice: Use of undefined constant `myErrorHandler` - assumed `'myErrorHandler'` on line number 14

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 14.

 - On line 14, the function call `set_error_handler(myErrorHandler)` is invalid.

 - There is no comma `,` between `$error_no` and `$error_msg` in the function declaration on line 7.

 - On line 7, the function declaration `function myErrorHandler($error_no, $error_msg)` is invalid.

 - On line 14, the argument `myErrorHandler` in the `set_error_handler()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/ErrorHandling/UnquotedArgumentOnSetErrorHandlerFunctionTest.php]

Correct the code so that it outputs the strings `Error: [2] Division by zero` and `Please try again.` in separate lines.

```php
<?php
function Divide($dividend, $divisor)
{
    return($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler(myErrorHandler);
echo Divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function Divide($dividend, $divisor)
{
    return($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler();
echo Divide(10, 0);
?>
```
/// type=MS, answer=[1,3]

Execute the program. What are the error messages?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given on line number 14

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19


/// type=MS, answer=[1,2,5]

Which statements correctly describe the error?

 - On line 14, the function call `set_error_handler()` is invalid.

 - The `set_error_handler()` function requires an argument when called.

 - There is no comma `,` between `$error_no` and `$error_msg` in the function declaration on line 7.

 - On line 7, the function declaration `function myErrorHandler($error_no, $error_msg)` is invalid.

 - There is no argument `myErrorHandler` specified in the `set_error_handler()` function call on line 14.

:::


/// type=CR, answer=[tests/ErrorHandling/MissingArgumentOnSetErrorHandlerFunctionTest.php]

Correct the code so that it outputs the strings `Error: [2] Division by zero` and `Please try again.` in separate lines.

```php
<?php
function Divide($dividend, $divisor)
{
    return($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler();
echo Divide(10, 0);
?>
```


:::

/// type=REPL

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo Divide(10, 0);
?>
```
/// type=MS, answer=[4,5]

Execute the program. What are its outputs?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `Please try again.`.

 - It prints `Error: [512] Divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.


/// type=MS, answer=[3,5]

Remove the argument `"myErrorHandler"` from the function call `set_error_handler("myErrorHandler")` on line 19. Execute the program. What are the error messages?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19

:::


:::

/// type=REPL

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler();
echo Divide(10, 0);
?>
```
/// type=SS, answer=[4]

In the function declaration `function myErrorHandler($error_no, $error_msg, $error_file, $error_line)` on line 12, remove the comma `,` between `$error_msg` and `$error_file`. Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$dividend'` (T_VARIABLE), expecting `'('` on line number 2

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19

:::


:::

/// type=REPL

```php
<?php
function Divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler();
echo Divide(10, 0);
?>
```
/// type=SS, answer=[3]

In the function declaration `function Divide($dividend, $divisor)` on line 2, remove the open parenthesis `(` after `Divide`. Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - Warning: Divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$dividend'` (T_VARIABLE), expecting `'('` on line number 2

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19

:::


/// type=CR, answer=[tests/ErrorHandling/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the strings `Error: [512] Divide(): The value '0' as a divisor is not allowed in /index.php on line 5` and `Please try again.` in separate lines.

```php
<?php
function Divide$dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler();
echo Divide(10, 0);
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/ErrorHandling/CreateCustomErrorhandlerTest.php]

Write a program that creates a custom error handling function using PHP's built-in error handling function to detect and deal with errors properly. First, create a funtion named `OpenFile()` with the parameter `$file`. Inside the function body, create an `if-else` statement to test if `$file` exists or not. In the `if` construct, add the condition `!file_exists($file)`. Inside the `if` block, add the statement `trigger_error("Sorry, the file does not exist", E_USER_ERROR);`. Inside the `else` block, add the statement `fopen($file, "w");`. Next, create another function named `myTestErrorHandler()` with the parameters `$error_no`, `$error_msg`, `$error_file`, and `$error_line`. Inside the function body, add the statements `echo "Error: [$error_no] " . $error_msg . " in " . $error_file . " on line " . $error_line;` and `die("\nPlease try again.");` respectively. Then, create a statement that registers the `myTestErrorHandler()` function as a custom error handling function using the `set_error_handler()` function. Add another statement `echo OpenFile("myTest.txt");`. Run the program to view the output.

```php
<?php



?>
```

+++
