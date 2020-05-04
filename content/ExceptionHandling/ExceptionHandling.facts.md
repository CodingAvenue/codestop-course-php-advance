### Facts for Exception Handling lesson:

An exception is an object thrown by a program when there is an unexpected event or error that occurred.

Exception handling is the process of detecting and dealing with unexpected events that occur in a program properly.

PHP offers different keywords to deal with exceptions gracefully. These are as follows:

 - `try` facilitates the catching of a possible exception.

 - `throw` is used to throw an exception.

 - `catch` catches different classes of exceptions.

The thrown object should be an instance of the `Exception` class or its subclass.

The `Exception` class is the parent class of all PHP Exceptions. It has the following methods:

 - `getMessage()` returns the exception message as a string.

 - `getFile()` returns the name of the file where the specific exception is created.

 - `getLine()` returns the specific line number where a certain exception is created.

 - `getCode()` returns the exception code.

Code:

```php
<?php
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("The value '0' as a divisor is not allowed.");
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

Output:

```
Exception caught: The value '0' as a divisor is not allowed.
```

In the above example, the code breaks down as follows:

 - `if ($divisor == 0) { throw new Exception("The value '0' as a divisor is not allowed."); ...}` throws an exception if the conditional expression `$divisor == 0` evaluates to `true`.

 - `try { echo divide(10, 0); }` facilitates the catching of a possible exception thrown by the `divide()` function call.

 - `catch (Exception $e) {...}` executes the `echo` statement if an exception occurs within the `try` block.

 - `Exception $e` defines the `$e` variable as the instance of the `Exception` class.

 - `$e->getMessage()` accesses the `getMessage()` method of the `Exception` class instance `$e`.
