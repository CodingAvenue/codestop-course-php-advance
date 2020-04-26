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
/// type=SS, id=378a7604-432b-4efa-80aa-b4fb600781c7, answer=[5]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 15 years old.`.


/// type=MS, id=c0fc9e88-e3d4-47a0-8a56-765c6ef7113c, answer=[1,2,3,5]

Which of the following are keywords?

 - `new`

 - `class`

 - `public`

 - `require`

 - `function`


/// type=MS, id=dce2dc5c-a6c5-4769-aae1-6c1e7c7ff846, answer=[1,2]

Which of the following are classes?

 - `Person`

 - `Student`

 - `$student`

 - `display()`

 - `__construct()`


/// type=SS, id=51ceaeba-d1e0-4e44-9fe7-1f5960a2c556, answer=[3]

Which of the following is an object?

 - `Person`

 - `Student`

 - `$student`

 - `display()`

 - `__construct()`


/// type=MS, id=10715009-6377-484e-9a70-cf7947ca19a1, answer=[4,5]

Which of the following are methods?

 - `$age`

 - `$name`

 - `$student`

 - `display()`

 - `__construct()`


/// type=MS, id=428883cb-8c13-4be5-aa83-670a02341c04, answer=[1,2]

Which of the following are properties?

 - `$age`

 - `$name`

 - `$student`

 - `display()`

 - `__construct()`


/// type=SS, id=e532501a-47bd-4608-90d0-a7dba6fec51c, answer=[5]

In the statement `require __DIR__ . '/Person.php';` on line 2 of `Student.php`, what is `require`?

 - It is a method.

 - It is a keyword.

 - It is a function.

 - It is a magic constant.

 - It is a language construct.


/// type=SS, id=37206ed7-51e8-4829-a0ae-1c90554ab8a3, answer=[4]

In the statement `require __DIR__ . '/Person.php';` on line 2 of `Student.php`, what is `__DIR__`?

 - It is a method.

 - It is a keyword.

 - It is a function.

 - It is a magic constant.

 - It is a language construct.


/// type=SS, id=2b6123c3-d931-40fc-a951-63c6fda36419, answer=[5]

In the statement `require __DIR__ . '/Person.php';` on line 2 of `Student.php`, what is `Person.php`?

 - It is a method.

 - It is a keyword.

 - It is a magic constant.

 - It is a language construct.

 - It is the name of the file to be included.


/// type=MS, id=def1e61d-3c92-4ced-aaa4-d0a9570d323c, answer=[1,3]

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
/// type=SS, id=9b99e136-01da-4e76-b53e-eec498252b10, answer=[2]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `2`.

 - It prints `5`.

 - It prints `10`.

 - It produces an error.


/// type=MS, id=427afca5-2c48-4de7-a6f5-882e7ded159a, answer=[1,3,4]

Which of the following are exception handling keywords?

 - `try`

 - `$this`

 - `throw`

 - `catch`

 - `__DIR__`


/// type=MS, id=722b35db-3446-4690-9ce8-89f553fccbb1, answer=[3,4,5]

Which of the following are exception classes?

 - `class`

 - `extends`

 - `Exception`

 - `DivideByZeroException`

 - `DivideByNegativeException`


/// type=SS, id=90c939f9-fc7a-49d0-8527-1f5c34aaa3b9, answer=[3]

Which of the following is a magic constant?

 - `$this`

 - `catch`

 - `__DIR__`

 - `Exception`

 - `require_once`


/// type=SS, id=5b261ffb-a854-4ccb-964c-43a65ef74727, answer=[4]

In the statement `require_once __DIR__ . "/DivideByZeroException.php";` on line 2 of `main.php`, what is `require_once`?

 - It is a method.

 - It is a keyword.

 - It is a magic constant.

 - It is a language construct.

 - It is the name of the file to be included.


/// type=MS, id=e97bc513-0107-4fd1-8c96-0640df994368, answer=[1,5]

On line 2 of `main.php`, what does the statement `require_once __DIR__ . "/DivideByZeroException.php";` do?

 - It checks if the file `DivideByZeroException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByZeroException.php` to the file `main.php`.

 - It removes the content of the file `DivideByZeroException.php` from the file `main.php`.

 - It creates the content of the file `DivideByZeroException.php` within the file `main.php`.

 - It includes the content of the file `DivideByZeroException.php` into the file `main.php` once.


/// type=SS, id=2607edd8-fb98-4b58-a6e2-02974a41a60a, answer=[4]

In the statement `include_once __DIR__ . "/DivideByNegativeException.php";` on line 3 of `main.php`, what is `include_once`?

 - It is a method.

 - It is a keyword.

 - It is a magic constant.

 - It is a language construct.

 - It is the name of the file to be included.


/// type=MS, id=356a212f-be65-41ab-b6aa-2a8a7308da84, answer=[1,5]

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
/// type=SS, id=e578c7de-a43d-47f2-a791-8a67e715ac5f, answer=[3]

Execute the program. What is its output?

 - It prints `0`.

 - It prints `2`.

 - It prints `5`.

 - It prints `10`.

 - It produces an error.


/// type=MS, id=5f90d2ff-54a7-451e-a4f1-fe6a71a7b742, answer=[4,5]

Which of the following are language constructs?

 - `try`

 - `throw`

 - `__DIR__`

 - `include`

 - `require_once`


/// type=MS, id=2bc56cc3-afcc-4ce3-bc5d-0d6f8d6f0fe0, answer=[1,3]

Which statements correctly describe `include __DIR__ . "/DivideByZeroException.php";`?

 - It checks if the file `DivideByZeroException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByZeroException.php` to the file `main.php`.

 - It includes the content of the file `DivideByZeroException.php` into the file `main.php`.

 - It removes the content of the file `DivideByZeroException.php` from the file `main.php`.

 - It creates the content of the file `DivideByZeroException.php` within the file `main.php`.


/// type=MS, id=5bd4d60c-f612-4032-a6f7-36ea1169414e, answer=[1,5]

Which statements correctly describe `require_once __DIR__ . "/DivideByNegativeException.php";`?

 - It checks if the file `DivideByNegativeException.php` exists in the specified path or not.

 - It displays the content of the file `DivideByNegativeException.php` to the file `main.php`.

 - It removes the content of the file `DivideByNegativeException.php` from the file `main.php`.

 - It creates the content of the file `DivideByNegativeException.php` within the file `main.php`.

 - It includes the content of the file `DivideByNegativeException.php` into the file `main.php` once.


/// type=SS, id=51c2ca26-d53c-4e28-990e-9e5e1fb18e9c, answer=[3]

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
/// type=SS, id=dd0c97e6-3cf6-4d31-91e6-edd76d7ec6dc, answer=[3]

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

/// type=SS, id=9b8249e4-160e-4bec-a9ee-9522a7528ee0, answer=[2]

Which statement is true about file inclusion?

 - It removes the specified file during the execution of a program.

 - It enables the content of a certain file to be added to another PHP file.

 - It adds and checks the specified file during the execution of a program.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is the process of detecting and dealing with unexpected events that occur in a program properly.


/// type=MS, id=a3081793-d562-485b-bdd8-dabe18b67abd, answer=[1,2,4,5]

Which language constructs are used for file inclusion?

 - `require`

 - `include`

 - `__DIR__`

 - `include_once`

 - `require_once`


/// type=MS, id=58da1585-4d6b-4140-bc8c-d366fc1c4f0e, answer=[2,5]

Which statements correctly describe the `require` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


/// type=MS, id=7deeb2fd-50fb-4c75-8d99-e53c93ee50c6, answer=[3,5]

Which statements correctly describe the `require_once` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


/// type=MS, id=ed3e5b35-269b-444a-9893-f711f55cb9b8, answer=[2,4]

Which statements correctly describe the `include` construct?

 - It removes the specified file during the execution of a program.

 - It adds and checks the specified file during the execution of a program.

 - It adds and checks the content of the specified file to another file only once.

 - It returns `E_WARNING` and continues the execution of a program if the specified file does not exist.

 - It returns `E_COMPILE_ERROR` and terminates the execution of a program if the specified file does not exist.


/// type=MS, id=8fcb3be5-6f54-4710-8ee6-c42fe6dbfb6d, answer=[3,4]

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
/// type=SS, id=a0a6f879-3bb6-4eab-8c3f-7011de187d9b, answer=[3]

Execute the program. What is its output?

 - It prints `15`.

 - It prints `John`.

 - It produces an error.

 - No output is displayed.

 - It prints `John is 15 years old.`.


/// type=MS, id=c2669b38-e4db-4c18-be64-46c268f631c5, answer=[1,3,5]

What are the error messages?

 - Fatal error: Class `'Person'` not found in /Student.php on line 4

 - Warning: `require(Person.php)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Warning: `include(/Personphp)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Fatal error: require(): Failed opening required `'Person.php'` (include_path='C:\xampp\php\PEAR') in /Student.php on line 2

 - Warning: include(): Failed opening `'/Personphp'` for inclusion (include_path='C:\xampp\php\PEAR') in /Student.php on line 2


/// type=MS, id=4f3c7ddd-c718-45bc-b6f6-9cfce19aef97, answer=[1,2]

Which statements correctly describe the error?

 - On line 2 of `Student.php`, the filename `Person.php` is miswritten as `Personphp`.

 - On line 2 of `Student.php`, the statement `include __DIR__ . '/Personphp';` is invalid.

 - On line 2 of `Student.php`, the filename `'Personphp'` is not enclosed in single quotes `''`.

 - There is no forward slash `/` at the beginning of `Personphp` in the `include` statement on line 2 of `Student.php`.

 - There are no parentheses `()` that enclosed the file path `__DIR__ . '/Personphp'` in the `include` statement on line 2 of `Student.php`.

:::


/// type=CR, id=49f69ec2-2dbd-47bf-bb65-18b0af6a8d7e, answer=[tests/FileInclusion/IncorrectFilenameSpecifiedInIncludeTest.php], filename=[Student.php,Person.php]

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
/// type=MS, id=d419eb7b-00d0-4183-88b3-4901c0f818be, answer=[2,4]

Execute the program. What are the error messages?

 - Fatal error: Class `'Person'` not found in /Student.php on line 4

 - Warning: `require(Person.php)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Warning: `include(/Personphp)`: failed to open stream: No such file or directory in /Student.php on line 2

 - Fatal error: require(): Failed opening required `'Person.php'` (include_path='C:\xampp\php\PEAR') in /Student.php on line 2

 - Warning: include(): Failed opening `'/Personphp'` for inclusion (include_path='C:\xampp\php\PEAR') in /Student.php on line 2


/// type=MS, id=c9c1de15-d2d8-4e7f-8e9e-49a36bd3aaea, answer=[2,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2 of `Student.php`.

 - On line 2 of `Student.php`, the statement `require __DIR__ . 'Person.php';` is invalid.

 - On line 2 of `Student.php`, the filename `'Person.php'` is not enclosed in single quotes `''`.

 - There is no forward slash `/` at the beginning of `Person.php` in the `require` statement on line 2 of `Student.php`.

 - There are no parentheses `()` that enclosed the file path `__DIR__ . 'Person.php'` in the `require` statement on line 2 of `Student.php`.

:::


/// type=CR, id=1583d9fd-173d-41a9-ab3c-84515331e5f1, answer=[tests/FileInclusion/IncorrectFilePathSpecifiedInIncludeTest.php], filename=[Student.php,Person.php]

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
/// type=SS, id=09db0e9d-3848-47fe-b884-b3520bd780af, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'/'` in /main.php on line 2

 - Notice: Use of undefined constant `__DRI__` - assumed `'__DRI__'` in /main.php on line 3

 - Fatal error: Cannot declare class `Person`, because the name is already in use in /Person.php on line 2

 - Warning: `include_once(__DRI__/DivideByNegativeException.php)`: failed to open stream: No such file or directory in /main.php on line 3

 - Warning: include_once(): Failed opening `'__DRI__/DivideByNegativeException.php'` for inclusion (include_path='C:\xampp\php\PEAR') in /main.php on line 3


/// type=MS, id=7ceebec5-cfdd-40c4-afbe-268e58992049, answer=[2,3,4]

Which statements correctly describe the error?

 - Adding multiple file inclusion statements in a certain program is not allowed.

 - Including the content of the `Person.php` file into the `Student.php` file twice is not allowed.

 - On lines 2 and 3 of `Student.php`, the file `Person.php` is included twice into the `Student.php` file.

 - In the `require` statement on line 2 of `Student.php`, the file `Person.php` is duplicated in the `include` statement on line 3 of `Student.php`. 

 - There are no parentheses `()` that enclosed the file path `__DIR__ . '/Person.php'` in the `require` statement on line 2 of `Student.php`.

:::


/// type=CR, id=7f859102-74fb-49bb-9b04-46bd3b3f76ab, answer=[tests/FileInclusion/DuplicateFileInclusionStatementTest.php], filename=[Student.php,Person.php]

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
/// type=SS, id=d7d74fb1-336f-4c3b-a669-a7c1da6a21a9, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'/'` in /main.php on line 2

 - Notice: Use of undefined constant `__DRI__` - assumed `'__DRI__'` in /main.php on line 3

 - Fatal error: Cannot declare class `Person`, because the name is already in use in /Person.php on line 2

 - Warning: `include_once(__DRI__/DivideByNegativeException.php)`: failed to open stream: No such file or directory in /main.php on line 3

 - Warning: include_once(): Failed opening `'__DRI__/DivideByNegativeException.php'` for inclusion (include_path='C:\xampp\php\PEAR') in /main.php on line 3


/// type=MS, id=fd7b0902-ab50-4f2b-8c30-dd52370cf6b4, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no file path specified in the `include_once` statement on line 3 of `main.php`.

 - There is no semicolon `;` at the end of the `require_once` statement on line 2 of `main.php`.

 - On line 2 of `main.php`, the statement `require_once __DIR__ . /DivideByZeroException.php";` is invalid.

 - On line 2 of `main.php`, `/DivideByZeroException.php` in the `require_once` statement is not properly quoted.

 - There is no double quote `"` between the concatenation operator `.` and `/DivideByZeroException.php"` on line 2 of `main.php`.

:::


/// type=CR, id=431a74cd-fc48-4740-a203-6471cbb77638, answer=[tests/FileInclusion/MissingOpenDoubleQuoteTest.php], filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

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
/// type=MS, id=42efa459-d1a5-429d-8e25-68f98c943b9d, answer=[2,4,5]

Execute the program. What are the error messages?

 - syntax error, unexpected `'/'` in /main.php on line 2

 - Notice: Use of undefined constant `__DRI__` - assumed `'__DRI__'` in /main.php on line 3

 - Fatal error: Cannot declare class `Person`, because the name is already in use in /Person.php on line 2

 - Warning: `include_once(__DRI__/DivideByNegativeException.php)`: failed to open stream: No such file or directory in /main.php on line 3

 - Warning: include_once(): Failed opening `'__DRI__/DivideByNegativeException.php'` for inclusion (include_path='C:\xampp\php\PEAR') in /main.php on line 3


/// type=MS, id=9827a9fd-cf83-4a09-8535-3ccd5938b9f8, answer=[2,4]

Which statements correctly describe the error?

 - There is no file path specified in the `include_once` statement on line 3 of `main.php`.

 - In the `include_once` statement on line 3 of `main.php`, the magic constant `__DIR__` is misspelled as `__DRI__`.

 - On line 2 of `main.php`, `/DivideByZeroException.php` in the `require_once` statement is not properly quoted.

 - On line 3 of `main.php`, the statement `include_once __DRI__ . "/DivideByNegativeException.php";` is invalid.

 - On line 3 of `main.php`, `/DivideByNegativeException.php` in the `include_once` statement is not properly quoted.

:::


/// type=CR, id=79aea90f-fc01-4d56-ab7d-5f7ff5c08dec, answer=[tests/FileInclusion/MisspelledMagicConstantDirTest.php], filename=[main.php,DivideByZeroException.php,DivideByNegativeException.php]

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

/// type=CR, id=91d01b35-fff1-416a-bb7e-5e5d82b9563e, answer=[tests/FileInclusion/CreateFileInclusionStatementsTest.php], filename=[MyShape.php,Circle.php,Square.php,main.php]

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
