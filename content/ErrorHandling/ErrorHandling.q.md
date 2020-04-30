# Error Handling

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
/// type=SS, id=7226b95e-7611-4580-8d42-55c32f523099, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `divide(10, 0)`.


/// type=SS, id=19f8de69-aeba-468f-a254-2775ce75516c, answer=[1]

What is the error message?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5


/// type=MS, id=d6aa7e8b-e47f-4d2e-a6ad-edbbd4732e08, answer=[1,5]

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
        die("divide(): The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```
/// type=SS, id=b0598a70-4e74-4282-b833-a2f75142896e, answer=[5]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `divide(): The value '0' as a divisor is not allowed.`.


/// type=MS, id=8f4ccf92-c921-426a-b733-9cb521a12ff8, answer=[4,5]

Which of the following are parameters?

 - `0`

 - `10`

 - `divide()`

 - `$divisor`

 - `$dividend`


/// type=MS, id=82312b49-6f7d-4b06-9d1e-d3633467bedb, answer=[1,2]

Which of the following are arguments?

 - `0`

 - `10`

 - `divide()`

 - `$divisor`

 - `$dividend`


/// type=SS, id=81dd368d-47b8-4919-824a-11afd751fdea, answer=[5]

In the statement `die("divide(): The value '0' as a divisor is not allowed.");` on line 5, what is `die()`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=MS, id=48b83814-7955-4ab5-b53b-6729e6e4365f, answer=[1,5]

On line 5, what does the `die()` function do?

 - It terminates the program if an error occurs.

 - It registers the custom error handling function.

 - It calls the error handling function in the program.

 - It creates the error message `divide(): The value '0' as a divisor is not allowed.`.

 - It prints the error message `divide(): The value '0' as a divisor is not allowed.` if an error occurred.


/// type=MS, id=3bced93b-a8a0-4806-ae20-e737386b645a, answer=[1,2,5]

Which statements correctly describe the `divide()` function?

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
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```
/// type=SS, id=a361656f-a221-497b-acc9-9c18694a8039, answer=[5]

Execute the program. What is its output?

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `divide(): The value '0' as a divisor is not allowed.`.

 - It prints `Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.


/// type=SS, id=7ae08470-b618-4039-94dd-639a40278b9f, answer=[5]

In the statement `trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what is `trigger_error()`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=SS, id=da1505f1-3a81-4018-9a76-8e32c8bb5091, answer=[4]

In the statement `trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what is `E_USER_WARNING`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=SS, id=c4a9dfec-db75-45f9-8ce8-763fc7dfc3a2, answer=[4]

In the statement `trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what does `E_USER_WARNING` do?

 - It specifies the non-fatal runtime error.

 - It specifies the user-generated notice message.

 - It specifies the fatal user-generated error message.

 - It specifies the non-fatal user-generated warning message.

 - It specifies the non-fatal user-generated warning message.


/// type=SS, id=29dc9fe6-f3af-4304-be47-0ac778e5f481, answer=[5]

In the statement `trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` on line 5, what does the `trigger_error()` function do?

 - It generates an error report at runtime.

 - It terminates the program if an error occurs.

 - It registers the custom error handling function.

 - It calls the error handling function in the program.

 - It generates the user-defined error message `divide(): The value '0' as a divisor is not allowed` to an exception at runtime.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo divide(10, 0);
?>
```
/// type=SS, id=bc1afcf1-cc87-42be-8e13-25094989ebb8, answer=[5]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `Please try again.`.

 - It prints `Error: [2] Division by zero`.

 - It prints `Error: [2] Division by zero` and `Please try again.` in separate lines.


/// type=SS, id=44260444-5326-46dd-a486-46f5721a532a, answer=[1]

In the function declaration `function myErrorHandler($error_no, $error_msg)` on line 7, what is `$error_no`?

 - It is a parameter that specifies the error report level.

 - It is a parameter that specifies the user-defined error message.

 - It is a parameter that specifies the line number where the error occurred.

 - It is a parameter that specifies the name of the file where the error occurred.

 - It is a parameter that specifies the array containing every variable and their values in use when the error occurred.


/// type=SS, id=5e56ce56-7408-4d5c-ad25-b37b9df60559, answer=[2]

In the function declaration `function myErrorHandler($error_no, $error_msg)` on line 7, what is `$error_msg`?

 - It is a parameter that specifies the error report level.

 - It is a parameter that specifies the user-defined error message.

 - It is a parameter that specifies the line number where the error occurred.

 - It is a parameter that specifies the name of the file where the error occurred.

 - It is a parameter that specifies the array containing every variable and their values in use when the error occurred.


/// type=MS, id=c80628a0-6047-4196-bcaa-650d80951ee1, answer=[1,5]

Which statements correctly describe `die("\nPlease try again.");` on line 11?

 - It terminates the program if an error occurs.

 - It registers the custom error handling function.

 - It creates the error message `Please try again.`.

 - It calls the error handling function in the program.

 - It prints the error message `Please try again.` if an error occurs.


/// type=MS, id=5bbcbabd-230d-4b01-a4b2-c4a81c9e040f, answer=[1,3,4,5]

Which statements correctly describe the `myErrorhandler()` function?

 - It is a custom error handling function.

 - It is a user-defined function that returns a value.

 - It is a user-defined function that does not return a value.

 - It is a user-defined error handling function that has two parameters `$error_no` and `$error_msg`.

 - It displays the strings `Error: [2] Division by zero` and `Please try again.` in separate lines.


/// type=SS, id=ebf2a4bc-f4c4-439b-a145-a8cc3e2abf14, answer=[5]

In the statement `set_error_handler("myErrorHandler");` on line 14, what is `set_error_handler()`?

 - It is a keyword.

 - It is a construct.

 - It is an operator.

 - It is an error constant.

 - It is an error handling function.


/// type=SS, id=55572173-2bfa-4970-a8bf-96c92b1e680d, answer=[4]

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
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo divide(10, 0);
?>
```
/// type=MS, id=801fb65f-2bfa-4550-b681-77605066485a, answer=[4,5]

Execute the program. What are its outputs?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `Please try again.`.

 - It prints `Error: [512] divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.


/// type=MS, id=5f69c2e2-6652-453f-bc6a-0ebff61f555d, answer=[1,4,5]

Which of the following are error handling functions?

 - `die()`

 - `divide()`

 - `E_USER_WARNING`

 - `trigger_error()`

 - `set_error_handler()`


/// type=MS, id=d35b4dbf-5308-49a3-8f3a-16e183d3680c, answer=[2,3,4]

Which of the following are parameters?

 - `divide()`

 - `$error_no`

 - `$error_msg`

 - `$error_file`

 - `myErrorHandler()`


/// type=SS, id=dd79318d-8747-4621-bcff-b3fedefa0725, answer=[5]

Which of the following is a custom error handling function?

 - `divide()`

 - `$error_no`

 - `E_USER_WARNING`

 - `trigger_error()`

 - `myErrorHandler()`


/// type=SS, id=0f37ce70-f253-4f98-8672-92938c12c74e, answer=[3]

Which of the following is an error constant?

 - `divide()`

 - `$error_no`

 - `E_USER_WARNING`

 - `trigger_error()`

 - `myErrorHandler()`


/// type=SS, id=2a6a43cc-826b-4e6a-81f0-4c81a4e2c4bb, answer=[4]

In the function declaration `function myErrorHandler($error_no, $error_msg, $error_file, $error_line)` on line 12, what does the `$error_file` parameter specify?

 - The error report level.

 - The user-defined error message.

 - The line number where the error occurred.

 - The name of the file where the error occurred.

 - The array containing every variable and their values in use when the error occurred.


/// type=SS, id=9f80fde0-0ee4-4e31-8721-63745346f8fc, answer=[3]

In the function declaration `function myErrorHandler($error_no, $error_msg, $error_file, $error_line)` on line 12, what does the `$error_line` parameter specify?

 - The error report level.

 - The user-defined error message.

 - The line number where the error occurred.

 - The name of the file where the error occurred.

 - The array containing every variable and their values in use when the error occurred.


/// type=MS, id=55ed9c42-846c-4152-a8fc-aba53c6ac7ce, answer=[1,3,4,5]

Which statements correctly describe the `myErrorHandler()` function?

 - It is a custom error handling function.

 - It is a user-defined function that returns a value.

 - It is a user-defined function that does not return a value.

 - It is a user-defined error handling function that has four parameters `$error_no`, `$error_msg`, `$error_file`, and `$error_line`.

 - It displays the strings `Error: [512] divide(): The value '0' as a divisor is not allowed in /index.php on line 5` and `Please try again.` in separate lines.


:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=a01cca1b-7a71-456f-82f5-c9fd0a272865, answer=[4]

Which statement best describes an error?

 - It is a built-in error handling function.

 - It is a user-defined error handling function.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is a type of condition that occurs in a program for having incorrect syntax or logic.

 - It can have the parameters `error level`, `error message`, `error_file`, and `error_line`.


/// type=SS, id=e636d3b4-09d7-45a7-b2bb-4ef513d20fa1, answer=[3]

Which statement is true about error handling?

 - It is a built-in error handling function.

 - It is a user-defined error handling function.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is a type of condition that occurs in a program for having incorrect syntax or logic.

 - It can have the parameters `error level`, `error message`, `error_file`, and `error_line`.


/// type=MS, id=1a0b7af0-8aaf-4caf-a2d6-4307f1ebad2a, answer=[2,5]

Which statements correctly describe the custom error handling function?

 - It is a built-in error handling function.

 - It is a user-defined error handling function.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is a type of condition that occurs in a program for having incorrect syntax or logic.

 - It can have the parameters `error level`, `error message`, `error_file`, and `error_line`.


/// type=MS, id=0f9092bd-b758-4bbe-ba4d-8ab389ff184a, answer=[1,2,3,5]

Which of the following are types of error?

 - `Fatal Error`

 - `Syntax Error`

 - `Notice Error`

 - `Runtime Error`

 - `Warning Error`


/// type=SS, id=f1184e74-d1a7-4ce8-b593-2da810b3c002, answer=[1]

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
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die(divide(): The value '0' as a divisor is not allowed.);
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```
/// type=SS, id=ce1e3202-0b3e-4006-a034-300122085755, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `10`.

 - It produces an error.

 - No output is displayed.

 - It prints `divide(): The value '0' as a divisor is not allowed.`.


/// type=SS, id=31925074-eb58-4e78-adc3-e2bf519b320d, answer=[2]

What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, id=091d619a-3046-4f5e-838f-9d2ef9e5e821, answer=[4,5]

Which statements correctly describe the error?

 - There is no open parenthesis `(` after `die` on line 5.

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `die(divide(): The value '0' as a divisor is not allowed.)` is invalid.

 - On line 5, the string `divide(): The value '0' as a divisor is not allowed.` is not enclosed in double quotes `""`.

:::


/// type=CR, id=1c8c1286-f13d-464f-8b53-a1c13f88207f, answer=[tests/ErrorHandling/MissingDoubleQuotesTest.php]

Correct the code so that it outputs the string `divide(): The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die(divide(): The value '0' as a divisor is not allowed.);
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die"divide(): The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```
/// type=SS, id=630208f3-4af2-4dd7-8f47-714b5c596322, answer=[5]

What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, id=485e83f5-cbd0-4c03-ad83-603e1ea56eca, answer=[1,4]

Which statements correctly describe the error?

 - There is no open parenthesis `(` after `die` on line 5.

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `die"divide(): The value '0' as a divisor is not allowed.")` is invalid.

 - On line 5, the string `divide(): The value '0' as a divisor is not allowed.` is not enclosed in double quotes `""`.

:::


/// type=CR, id=e4f5aa7a-515a-4121-9966-12fa61310f39, answer=[tests/ErrorHandling/MissingOpenParenthesisOnDieTest.php]

Correct the code so that it outputs the string `divide(): The value '0' as a divisor is not allowed.`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        die"divide(): The value '0' as a divisor is not allowed.");
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed" E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```
/// type=SS, id=89a99ee1-ca74-4e39-9859-8945125eb9fc, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, id=6012b6e6-754c-4046-a7f0-ee6f4250a83f, answer=[4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open parenthesis `(` after `trigger_error` on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `trigger_error("divide(): The value '0' as a divisor is not allowed" E_USER_WARNING)` is invalid.

 - There is no comma `,` between `divide(): The value '0' as a divisor is not allowed` and `E_USER_WARNING` on line 5.

:::


/// type=CR, id=bc534c87-e583-4c62-97bf-484a9f828259, answer=[tests/ErrorHandling/MissingCommaBetweenArgumentsTest.php]

Correct the code so that it outputs the string `Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed" E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error( , E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```
/// type=SS, id=8c5542c8-e0f6-4313-9d1c-02566e7b043c, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - syntax error, unexpected `':'`, expecting `')'` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'E_USER_WARNING'` (T_STRING), expecting `','` or `')'` on line number 5

 - syntax error, unexpected `'"divide(): The value '0' as a '` (T_CONSTANT_ENCAPSED_STRING) on line number 5


/// type=MS, id=fd155342-3d48-485b-8e5c-04d0c8120546, answer=[4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5.

 - There is no open parenthesis `(` after `trigger_error` on line 5.

 - There is no open curly brace `{` after the `if` construct on line 4.

 - On line 5, the function call `trigger_error( , E_USER_WARNING)` is invalid.

 - There is no error message specified as the first argument of the `trigger_error()` function call on line 5.

:::


/// type=CR, id=7729b268-1345-4b87-8637-16760e18074c, answer=[tests/ErrorHandling/MissingFirstArgumentOnTriggerErrorTest.php]

Correct the code so that it outputs the string `Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error(, E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

echo divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler(myErrorHandler);
echo divide(10, 0);
?>
```
/// type=SS, id=39a487e3-8802-46a2-a14c-d1930a5f1549, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Notice: Use of undefined constant `myErrorHandler` - assumed `'myErrorHandler'` on line number 14

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19


/// type=MS, id=7a9581d6-de7e-485c-a907-27a2ae08625a, answer=[2,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 14.

 - On line 14, the function call `set_error_handler(myErrorHandler)` is invalid.

 - There is no comma `,` between `$error_no` and `$error_msg` in the function declaration on line 7.

 - On line 7, the function declaration `function myErrorHandler($error_no, $error_msg)` is invalid.

 - On line 14, the argument `myErrorHandler` in the `set_error_handler()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=6e0e6252-f86b-4ccc-96dd-fee81e80b833, answer=[tests/ErrorHandling/UnquotedArgumentOnSetErrorHandlerFunctionTest.php]

Correct the code so that it outputs the strings `Error: [2] Division by zero` and `Please try again.` in separate lines.

```php
<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler(myErrorHandler);
echo divide(10, 0);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler();
echo divide(10, 0);
?>
```
/// type=MS, id=9cfb1e10-5aba-49dc-84bd-2e65d021006a, answer=[1,3]

Execute the program. What are the error messages?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given on line number 14

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19


/// type=MS, id=662e6414-1c53-4a46-8710-b521266d8b47, answer=[1,2,5]

Which statements correctly describe the error?

 - On line 14, the function call `set_error_handler()` is invalid.

 - The `set_error_handler()` function requires an argument when called.

 - There is no comma `,` between `$error_no` and `$error_msg` in the function declaration on line 7.

 - On line 7, the function declaration `function myErrorHandler($error_no, $error_msg)` is invalid.

 - There is no argument `myErrorHandler` specified in the `set_error_handler()` function call on line 14.

:::


/// type=CR, id=e2bd6e54-6632-4802-94cd-a78551e51762, answer=[tests/ErrorHandling/MissingArgumentOnSetErrorHandlerFunctionTest.php]

Correct the code so that it outputs the strings `Error: [2] Division by zero` and `Please try again.` in separate lines.

```php
<?php
function divide($dividend, $divisor)
{
    return ($dividend / $divisor);
}

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler();
echo divide(10, 0);
?>
```


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo divide(10, 0);
?>
```
/// type=MS, id=b6151333-6d89-42d5-b1a3-05be02b84634, answer=[4,5]

Execute the program. What are its outputs?

 - It prints `INF`.

 - It produces an error.

 - No output is displayed.

 - It prints `Please try again.`.

 - It prints `Error: [512] divide(): The value '0' as a divisor is not allowed in /index.php on line 5`.


/// type=MS, id=018aff7b-ab6e-4701-a268-ed7977014442, answer=[3,5]

Remove the argument `"myErrorHandler"` from the function call `set_error_handler("myErrorHandler")` on line 19. Execute the program. What are the error messages?

 - Warning: Division by zero on line number 4

 - syntax error, unexpected `','` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg, $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler();
echo divide(10, 0);
?>
```
/// type=SS, id=506243e0-600a-467e-8b0f-04a128d4629a, answer=[4]

In the function declaration `function myErrorHandler($error_no, $error_msg, $error_file, $error_line)` on line 12, remove the comma `,` between `$error_msg` and `$error_file`. Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$dividend'` (T_VARIABLE), expecting `'('` on line number 2

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19

:::


:::

/// type=REPL

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler();
echo divide(10, 0);
?>
```
/// type=SS, id=5eb21f21-d668-44f7-8cf3-33d232460e93, answer=[3]

In the function declaration `function divide($dividend, $divisor)` on line 2, remove the open parenthesis `(` after `divide`. Execute the program. What is the error message?

 - syntax error, unexpected `','` on line number 5

 - Warning: divide(): The value '0' as a divisor is not allowed in /index.php on line 5

 - syntax error, unexpected `'$dividend'` (T_VARIABLE), expecting `'('` on line number 2

 - syntax error, unexpected `'$error_file'` (T_VARIABLE), expecting `')'` on line number 12

 - Warning: `set_error_handler()` expects at least `1` parameter, `0` given in /index.php on line number 19

:::


/// type=CR, id=441461e9-bd39-4693-ba05-d38415594ec8, answer=[tests/ErrorHandling/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the strings `Error: [512] divide(): The value '0' as a divisor is not allowed in /index.php on line 5` and `Please try again.` in separate lines.

```php
<?php
function divide$dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function myErrorHandler($error_no, $error_msg $error_file, $error_line)
{
    echo "Error: [$error_no] " . $error_msg . " in ". $error_file . " on line " . $error_line; 

    die("\nPlease try again."); 
}

set_error_handler();
echo divide(10, 0);
?>
```


+++


+++

### Part 4: Practice

/// type=CR, id=c65b645f-b5c9-4423-b8b3-d8bed9d3e619, answer=[tests/ErrorHandling/CreateCustomErrorhandlerTest.php]

Write a program that creates a custom error handling function using PHP's built-in error handling function to detect and deal with errors properly. First, create a funtion named `OpenFile()` with the parameter `$file`. Inside the function body, create an `if-else` statement to test if `$file` exists or not. In the `if` construct, add the condition `!file_exists($file)`. Inside the `if` block, add the statement `trigger_error("Sorry, the file does not exist", E_USER_ERROR);`. Inside the `else` block, add the statement `fopen($file, "w");`. Next, create another function named `myTestErrorHandler()` with the parameters `$error_no`, `$error_msg`, `$error_file`, and `$error_line`. Inside the function body, add the statements `echo "Error: [$error_no] " . $error_msg . " in " . $error_file . " on line " . $error_line;` and `die("\nPlease try again.");` respectively. Then, create a statement that registers the `myTestErrorHandler()` function as a custom error handling function using the `set_error_handler()` function. Add another statement `echo OpenFile("myTest.txt");`. Run the program to view the output.

```php
<?php



?>
```

+++
