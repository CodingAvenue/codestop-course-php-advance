# File Inclusion

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[Student.php,Person.php]

```php
<?php 
require __DIR__ . '/Person.php';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 15 years old.`.


/// type=MS, answer=[1,2,3,5]

Which of the following are keywords?

 - `new`

 - `class`

 - `public`

 - `require`

 - `function`


/// type=MS, answer=[1,2]

Which of the following are classes?

 - `Person`

 - `Student`

 - `$student`

 - `display()`

 - `__construct()`


/// type=SS, answer=[3]

Which of the following is an object?

 - `Person`

 - `Student`

 - `$student`

 - `display()`

 - `__construct()`


/// type=MS, answer=[4,5]

Which of the following are methods?

 - `$age`

 - `$name`

 - `$student`

 - `display()`

 - `__construct()`


/// type=MS, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `$student`

 - `display()`

 - `__construct()`


/// type=SS, answer=[5]

In the statement `require __DIR__ . '/Person.php';` on line 2 of `Student.php`, what is `require`?

 - It is a method.

 - It is a keyword.

 - It is a function.

 - It is a magic constant.

 - It is a language construct.


/// type=SS, answer=[4]

In the statement `require __DIR__ . '/Person.php';` on line 2 of `Student.php`, what is `__DIR__`?

 - It is a method.

 - It is a keyword.

 - It is a function.

 - It is a magic constant.

 - It is a language construct.


/// type=SS, answer=[5]

In the statement `require __DIR__ . '/Person.php';` on line 2 of `Student.php`, what is `Person.php`?

 - It is a method.

 - It is a keyword.

 - It is a magic constant.

 - It is a language construct.

 - It is the name of the file to be included.


/// type=MS, answer=[1,3]

On line 2 of `Student.php`, what does the statement `require __DIR__ . '/Person.php';` do?

 - It checks if the file `Person.php` exists in the specified path or not.

 - It displays the content of the file `Person.php` to the file `Student.php`.

 - It includes the content of the file `Person.php` into the file `Student.php`.

 - It removes the content of the file `Person.php` from the file `Student.php`.

 - It creates the content of the file `Person.php` within the file `Student.php`.

:::


:::

/// type=REPL, readonly=true, filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

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
    echo divide(10, 5);
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
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `2`.

 - It prints `5`.

 - It prints `10`.

 - It produces an error.


/// type=MS, answer=[1,3,4]

Which of the following are exception handling keywords?

 - `try`

 - `$this`

 - `throw`

 - `catch`

 - `__DIR__`


/// type=MS, answer=[3,4,5]

Which of the following are exception classes?

 - `class`

 - `extends`

 - `Exception`

 - `DivideByZeroException`

 - `DivideByNegativeException`


/// type=SS, answer=[3]

Which of the following is a magic constant?

 - `$this`

 - `catch`

 - `__DIR__`

 - `Exception`

 - `require_once`


/// type=SS, answer=[4]

In the statement `require_once __DIR__ . "/DivideByZeroException.php";` on line 2 of `main.php`, what is `require_once`?

 - It is a method.

 - It is a keyword.

 - It is a magic constant.

 - It is a language construct.

 - It is the name of the file to be included.


/// type=MS, answer=[1,5]

On line 2 of `main.php`, what does the statement `require_once __DIR__ . "/DivideByZeroException.php";` do?

 - It checks if the file `DivideByZeroException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByZeroException.php` to the file `main.php`.

 - It removes the content of the file `DivideByZeroException.php` from the file `main.php`.

 - It creates the content of the file `DivideByZeroException.php` within the file `main.php`.

 - It includes the content of the file `DivideByZeroException.php` into the file `main.php` once.


/// type=SS, answer=[4]

In the statement `include_once __DIR__ . "/DivideByNegativeException.php";` on line 3 of `main.php`, what is `include_once`?

 - It is a method.

 - It is a keyword.

 - It is a magic constant.

 - It is a language construct.

 - It is the name of the file to be included.


/// type=MS, answer=[1,5]

On line 3 of `main.php`, what does the statement `include_once __DIR__ . "/DivideByNegativeException.php";` do?

 - It checks if the file `DivideByNegativeException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByNegativeException.php` to the file `main.php`.

 - It removes the content of the file `DivideByNegativeException.php` from the file `main.php`.

 - It creates the content of the file `DivideByNegativeException.php` within the file `main.php`.

 - It includes the content of the file `DivideByNegativeException.php` into the file `main.php` once.

:::


:::

/// type=REPL, filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
include __DIR__ . "/DivideByZeroException.php";
require_once __DIR__ . "/DivideByNegativeException.php";

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
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `2`.

 - It prints `5`.

 - It prints `10`.

 - It produces an error.


/// type=MS, answer=[4,5]

Which of the following are language constructs?

 - `try`

 - `throw`

 - `__DIR__`

 - `include`

 - `require_once`


/// type=MS, answer=[1,3]

Which statements correctly describe `include __DIR__ . "/DivideByZeroException.php";`?

 - It checks if the file `DivideByZeroException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByZeroException.php` to the file `main.php`.

 - It includes the content of the file `DivideByZeroException.php` into the file `main.php`.

 - It removes the content of the file `DivideByZeroException.php` from the file `main.php`.

 - It creates the content of the file `DivideByZeroException.php` within the file `main.php`.


/// type=MS, answer=[1,5]

Which statements correctly describe `require_once __DIR__ . "/DivideByNegativeException.php";`?

 - It checks if the file `DivideByNegativeException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByNegativeException.php` to the file `main.php`.

 - It removes the content of the file `DivideByNegativeException.php` from the file `main.php`.

 - It creates the content of the file `DivideByNegativeException.php` within the file `main.php`.

 - It includes the content of the file `DivideByNegativeException.php` into the file `main.php` once.


/// type=SS, answer=[3]

On line 2 of `main.php`, replace `include` with `require`. Execute the program. What is its output?

 - It prints `0`.

 - It prints `2`.

 - It prints `5`.

 - It prints `10`.

 - It produces an error.

:::


:::

/// type=REPL, filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require __DIR__ . "/DivideByZeroException.php";
require_once __DIR__ . "/DivideByNegativeException.php";

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
/// type=SS, answer=[3]

On line 2 of `main.php`, enclose `__DIR__ . "/DivideByZeroException.php"` in parentheses `()`. Execute the program. What is its output?

 - It prints `0`.

 - It prints `2`.

 - It prints `5`.

 - It prints `10`.

 - It produces an error.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[2]

Which statement is true about file inclusion?

 - It removes the specified file during the execution of a program.

 - It enables the content of a certain file to be added to another PHP file.

 - It adds and checks the specified file during the execution of a program.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=MS, answer=[1,2,4,5]

Which language constructs are used for file inclusion?

 - `require`

 - `include`

 - `__DIR__`

 - `include_once`

 - `require_once`


/// type=MS, answer=[2,5]

Which statements correctly describe the `require` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


/// type=MS, answer=[3,5]

Which statements correctly describe the `require_once` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


/// type=MS, answer=[2,4]

Which statements correctly describe the `include` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


/// type=MS, answer=[3,4]

Which statements correctly describe the `include_once` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[Student.php,Person.php]

```php
<?php 
include __DIR__ . '/Personphp';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 15 years old.`.


/// type=MS, answer=[1,3,5]

What are the error messages?

 - Fatal error: Class `'Person'` not found in /Student.php on line 4

 - Warning: `require(Person.php)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Warning: `include(/Personphp)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Fatal error: require(): Failed opening required `'Person.php'` (include_path='C:\xampp\php\PEAR') in /Student.php on line 2

 - Warning: include(): Failed opening `'/Personphp'` for inclusion (include_path='C:\xampp\php\PEAR') in /Student.php on line 2


/// type=MS, answer=[1,2]

Which statements correctly describe the error?

 - On line 2 of `Student.php`, the filename `Person.php` is miswritten as `Personphp`.

 - On line 2 of `Student.php`, the statement `include __DIR__ . '/Personphp';` is invalid.

 - On line 2 of `Student.php`, the filename `'Personphp'` is not enclosed in single quotes `''`.

 - There is no forward slash `/` at the beginning of `Personphp` in the `include` statement on line 2 of `Student.php`.

 - There are no parentheses `()` that enclosed the file path `__DIR__ . '/Personphp'` in the `include` statement on line 2 of `Student.php`.

:::


/// type=CR, answer=[tests/FileInclusion/IncorrectFilenameSpecifiedInIncludeTest.php], filename=[Student.php,Person.php]

Correct the code so that it outputs the string `John is 15 years old.`.

```php
<?php 
include __DIR__ . '/Personphp';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[Student.php,Person.php]

```php
<?php 
require __DIR__ . 'Person.php';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```
/// type=MS, answer=[2,4]

Execute the program. What are the error messages?

 - Fatal error: Class `'Person'` not found in /Student.php on line 4

 - Warning: `require(Person.php)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Warning: `include(/Personphp)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Fatal error: require(): Failed opening required `'Person.php'` (include_path='C:\xampp\php\PEAR') in /Student.php on line 2

 - Warning: include(): Failed opening `'/Personphp'` for inclusion (include_path='C:\xampp\php\PEAR') in /Student.php on line 2


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2 of `Student.php`.

 - On line 2 of `Student.php`, the statement `require __DIR__ . 'Person.php';` is invalid.

 - On line 2 of `Student.php`, the filename `'Person.php'` is not enclosed in single quotes `''`.

 - There is no forward slash `/` at the beginning of `Person.php` in the `require` statement on line 2 of `Student.php`.

 - There are no parentheses `()` that enclosed the file path `__DIR__ . 'Person.php'` in the `require` statement on line 2 of `Student.php`.

:::


/// type=CR, answer=[tests/FileInclusion/IncorrectFilePathSpecifiedInIncludeTest.php], filename=[Student.php,Person.php]

Correct the code so that it outputs the string `John is 15 years old.`.

```php
<?php 
require __DIR__ . 'Person.php';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[Student.php,Person.php]

```php
<?php 
require __DIR__ . '/Person.php';
include __DIR__ . '/Person.php';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;
	
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'/'` in /main.php on line 2

 - Notice: Use of undefined constant `__DRI__` - assumed `'__DRI__'` in /main.php on line 3

 - Fatal error: Cannot declare class `Person`, because the name is already in use in /Person.php on line 2

 - Warning: `include_once(__DRI__/DivideByNegativeException.php)`: failed to open stream: No such file or directory in /main.php on line 3

 - Warning: include_once(): Failed opening `'__DRI__/DivideByNegativeException.php'` for inclusion (include_path='C:\xampp\php\PEAR') in /main.php on line 3


/// type=MS, answer=[2,3,4]

Which statements correctly describe the error?

 - Adding multiple file inclusion statements in a certain program is not allowed.

 - Including the content of the `Person.php` file into the `Student.php` file twice is not allowed.

 - On lines 2 and 3 of `Student.php`, the file `Person.php` is included twice into the `Student.php` file.

 - In the `require` statement on line 2 of `Student.php`, the file `Person.php` is duplicated in the `include` statement on line 3 of `Student.php`. 

 - There are no parentheses `()` that enclosed the file path `__DIR__ . '/Person.php'` in the `require` statement on line 2 of `Student.php`.

:::


/// type=CR, answer=[tests/FileInclusion/DuplicateFileInclusionStatementTest.php], filename=[Student.php,Person.php]

Correct the code so that it outputs the string `John is 15 years old.`.

```php
<?php 
require __DIR__ . '/Person.php';
include __DIR__ . '/Person.php';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>
```

```php
<?php
class Person
{
    protected $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        if ($age > 0) {
            return true;
        }
        return false;
    }

    public function display()
    {
        echo $this->name . " is " . $this->getAge() . " years old.";
    }
}
?>
```


:::

/// type=REPL, readonly=true, filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once __DIR__ . /DivideByZeroException.php";
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
    echo divide(10, 5);
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
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'/'` in /main.php on line 2

 - Notice: Use of undefined constant `__DRI__` - assumed `'__DRI__'` in /main.php on line 3

 - Fatal error: Cannot declare class `Person`, because the name is already in use in /Person.php on line 2

 - Warning: `include_once(__DRI__/DivideByNegativeException.php)`: failed to open stream: No such file or directory in /main.php on line 3

 - Warning: include_once(): Failed opening `'__DRI__/DivideByNegativeException.php'` for inclusion (include_path='C:\xampp\php\PEAR') in /main.php on line 3


/// type=MS, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no file path specified in the `include_once` statement on line 3 of `main.php`.

 - There is no semicolon `;` at the end of the `require_once` statement on line 2 of `main.php`.

 - On line 2 of `main.php`, the statement `require_once __DIR__ . /DivideByZeroException.php";` is invalid.

 - On line 2 of `main.php`, `/DivideByZeroException.php` in the `require_once` statement is not properly quoted.

 - There is no double quote `"` between the concatenation operator `.` and `/DivideByZeroException.php"` on line 2 of `main.php`.

:::


/// type=CR, answer=[tests/FileInclusion/MissingOpenDoubleQuoteTest.php], filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

Correct the code so that it outputs `2`.

```php
<?php
require_once __DIR__ . /DivideByZeroException.php";
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
    echo divide(10, 5);
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

/// type=REPL, readonly=true, filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

```php
<?php
require_once __DIR__ . "/DivideByZeroException.php";
include_once __DRI__ . "/DivideByNegativeException.php";

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
    echo divide(10, 5);
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
/// type=MS, answer=[2,4,5]

Execute the program. What are the error messages?

 - syntax error, unexpected `'/'` in /main.php on line 2

 - Notice: Use of undefined constant `__DRI__` - assumed `'__DRI__'` in /main.php on line 3

 - Fatal error: Cannot declare class `Person`, because the name is already in use in /Person.php on line 2

 - Warning: `include_once(__DRI__/DivideByNegativeException.php)`: failed to open stream: No such file or directory in /main.php on line 3

 - Warning: include_once(): Failed opening `'__DRI__/DivideByNegativeException.php'` for inclusion (include_path='C:\xampp\php\PEAR') in /main.php on line 3


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - There is no file path specified in the `include_once` statement on line 3 of `main.php`.

 - In the `include_once` statement on line 3 of `main.php`, the magic constant `__DIR__` is misspelled as `__DRI__`.

 - On line 2 of `main.php`, `/DivideByZeroException.php` in the `require_once` statement is not properly quoted.

 - On line 3 of `main.php`, the statement `include_once __DRI__ . "/DivideByNegativeException.php";` is invalid.

 - On line 3 of `main.php`, `/DivideByNegativeException.php` in the `include_once` statement is not properly quoted.

:::


/// type=CR, answer=[tests/FileInclusion/MisspelledMagicConstantDirTest.php], filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

Correct the code so that it outputs `2`.

```php
<?php
require_once __DIR__ . "/DivideByZeroException.php";
include_once __DRI__ . "/DivideByNegativeException.php";

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
    echo divide(10, 5);
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


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/FileInclusion/CreateFileInclusionStatementsTest.php], filename=[MyShape.php,Circle.php,Square.php,main.php]

Given the implementations of the interface and classes below, create statements that use `require`, `require_once`, `include`, and `include_once` constructs to include and evaluate the content of a certain file into another PHP file. In the `Circle.php` tab, add an `include_once` statement that includes the content of the `MyShape` interface into the `Circle.php` file. In the `Square.php` tab, add a `require_once` statement that includes the content of the `MyShape` interface into the `Square.php` file. In the `main.php` tab, add two file inclusion statements that use `include` and `require` constructs to include the content of the files `Circle.php` and `Square.php` into the file `main.php`. Then, run the program to view the result.

```php
<?php
interface MyShape
{
    public function calculateArea();
}
?>
```

```php
<?php
//add include_once statement here...

class Circle implements MyShape
{
    const PI = 3.14159;
    private $radius;
	
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
	
    public function calculateArea()
    {
        //The formula to calculate the area of a circle is: (pi)(r^2)
        return self::PI * $this->radius * $this->radius;
    }
}
?>
```

```php
<?php
//add require_once statement here...

class Square implements MyShape
{
    private $side;
	
    public function __construct($side)
    {
        $this->side = $side;
    }
	
    public function calculateArea()
    {
        //The formula to calculate the area of a square is: (s^2)
        return $this->side * $this->side;
    }
}
?>
```

```php
<?php
//add require and include statements here...

$circle = new Circle(2.5);
$square = new Square(2.5);
echo "Circle area: " . $circle->calculateArea();
echo "\nSquare area: " . $square->calculateArea();
?>
```


+++
