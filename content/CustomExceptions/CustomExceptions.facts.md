### Facts for Custom Exceptions lesson:

An exception is an object thrown by a program when there is an unexpected event or error that occurred.

Exception handling is the process of detecting and dealing with unexpected events that occur in a program properly.

PHP enables programmers to create customized exception handling classes and methods that can be called when an exception occurs in a program.

A custom exception handling class is a user-defined class that extends the `Exception` class and inherits its methods and properties.

Code:

```php
<?php
class DivideByZeroException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new DivideByZeroException("The value '0' as a divisor is not allowed.");
    }

    return ($dividend / $divisor);
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->errorMessage();
}
?>
```

Output:

```
Exception caught: The divisor `0` is not a valid value.
```

In the above example, the code breaks down as follows:

 - `class DivideByZeroException extends Exception {... }` declares a custom exception class named `DivideByZeroException` that extends the `Exception` class.

 - `public function errorMessage() {... }` defines the `errorMessage()` method of the `DivideByZeroException` custom exception class.

 - `$this->getMessage();` accesses the `getMessage()` method of the parent `Exception` class inside of the `DivideByZeroException` custom exception class.

 - `if ($divisor == 0) { throw new DivideByZeroException("The value '0' as a divisor is not allowed."); ... }` throws a `DivideByZeroException` exception if the conditional expression `$divisor == 0` evaluates to `true`.

 - `try { echo divide(10, 0); }` facilitates the catching of a possible exception thrown by the `divide()` function call.

 - `catch (DivideByZeroException $div) {... }` executes the `echo` statement if a `DivideByZeroException` exception occurs within the `try` block.

 - `DivideByZeroException $div` defines the `$div` variable as the instance of the `DivideByZeroException` class.

 - `$div->errorMessage()` accesses the `errorMessage()` method of the `DivideByZeroException` class instance `$div`.
 