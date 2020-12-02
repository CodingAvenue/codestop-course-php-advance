### Facts for File Inclusion lesson:

File inclusion enables the content of a certain file to be added to another PHP file.

PHP offers several file inclusion language constructs to add the content of a certain file to another PHP file. These are as follows:

 - `require` adds and checks the specified file during the execution of a program. It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.

 - `require_once` adds and checks the content of the specified file to another file only once.

 - `include` adds and checks the specified file during the execution of a program. It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - `include_once` adds and checks the content of the specified file to another file only once.

Parentheses `()` are not required in the `require`, `include`, `require_once`, and `include_once` statements.

The `__DIR__` magic constant specifies the path that starts from the directory where the specified file is located.

Code:

:::

/// type=REPL, readonly=true, filename=[index.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once __DIR__ . "/DivideByZeroException.php";
include_once __DIR__ . "/DivideByNegativeException.php";

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
    echo divide(10, 2);
} catch (DivideByZeroException $div) {
    echo "Exception caught: " . $div->myMessage();
} catch (DivideByNegativeException $neg) {
    echo "Exception caught: " . $neg->myErrorMessage() . " in " . $neg->myErrorFile();
}
?>
```

```php
<?php
class DivideByZeroException extends Exception
{
    public function myMessage()
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

Output:

```
5
```

