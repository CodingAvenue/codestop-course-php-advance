### Facts for Error Handling lesson:

An error is a type of condition that occurs in a program for having incorrect syntax or logic. 

PHP has four types of error, these are as follows:

 - `Parse/Syntax Error` refers to a mistake in code such as `unclosed quotes and braces`, `missing semicolons`, and `missing or extra parentheses`. 

 - `Fatal Error` occurs when a set of instructions in a script cannot be executed like accessing an undefined function.

 - `Warning Error` occurs when providing an incorrect number of arguments in a function or including a missing file.

 - `Notice Error` occurs when accessing undefined variables.

Error handling is the process of detecting and dealing errors that occur in a program properly.

PHP offers different error handling functions to deal with errors gracefully. These are as follows:

 - `trigger_error()` generates a user-defined error message to an exception at runtime.

 - `die()` prints the specified error message before terminating the program execution.

 - `set_error_handler()` is used to define a custom error handler function.

A custom error handling function is a user-defined error handling function that has the parameters `error level`, `error message`, `error file`, and `error line`.

Code:

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

function myErrorHandler($error_no, $error_msg)
{
    echo "Error: [$error_no] " . $error_msg; 

    die("\nPlease try again."); 
}

set_error_handler("myErrorHandler");
echo Divide(10, 0);
?>
```

Output:

```
Error: [512] Divide(): The value '0' as a divisor is not allowed
Please try again.
```

In the example above, the code breaks down as follows:

 - `function Divide($dividend, $divisor) {...}` defines the `Divide()` function that uses the `trigger_error()` function to generate an error message if an error occur.

 - `trigger_error("Divide(): The value '0' as a divisor is not allowed", E_USER_WARNING);` generates the specified error message if an error occur.

 - `E_USER_WARNING` specifies a non-fatal user-generated warning.

 - `function myErrorHandler($error_no, $error_msg) {...}` defines the custom error handling function named `myErrorHandler()` with the parameters `$error_no` and `$error_msg`.

  - `die("Please try again.");` prints the string `Please try again.` then terminates the program execution.

 - `set_error_handler("myErrorHandler");` registers the `myErrorHandler()` function as the custom error handler.
