# Sessions

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
session_start();
 
$_SESSION["name"] = "Diana";

echo 'Welcome, ' . $_SESSION["name"] . '!';
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `session`.

 - It prints `Welcome,`.

 - It prints `Welcome, Diana!`.


/// type=SS, answer=[3]

What is `session_start()` on line 2?

 - It is a session.

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is a session variable.


/// type=SS, answer=[3]

On line 2, what does `session_start();` do?

 - It removes a session.

 - It displays session data.

 - It creates a new session.

 - It deletes a session variable.

 - It accesses a session variable.


/// type=SS, answer=[5]

In the statement `$_SESSION["name"] = "Diana";` on line 4, what is `$_SESSION`?

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is an operator.

 - It is a superglobal variable.


/// type=SS, answer=[5]

In the statement `$_SESSION["name"] = "Diana";` on line 4, what is `$_SESSION["name"]`?

 - It is a value.

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is a session variable.


/// type=SS, answer=[1]

In the statement `$_SESSION["name"] = "Diana";` on line 4, what is `Diana`?

 - It is a value.

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is a session variable.


/// type=SS, answer=[3]

Which statement best describes `$_SESSION["name"] = "Diana";` on line 4?

 - It returns the value `Diana` of the `$_SESSION["name"]` session variable.

 - It creates the value `Diana` of the `$_SESSION["name"]` session variable.

 - It assigns the value `Diana` to the `$_SESSION["name"]` session variable.

 - It accesses the value `Diana` in the `$_SESSION["name"]` session variable.

 - It removes the value `Diana` from the `$_SESSION["name"]` session variable.


/// type=SS, answer=[5]

In the `echo` statement on line 6, what does `$_SESSION["name"]` do?

 - It deletes the `$_SESSION["name"]` session variable.

 - It creates the `$_SESSION["name"]` session variable.

 - It defines the `$_SESSION["name"]` session variable.

 - It displays the `$_SESSION["name"]` session variable.

 - It accesses the session data in the `$_SESSION["name"]` session variable.

:::


:::

/// type=REPL, readonly=true

```php
<?php
session_start();
session_id("test-session-123");
 
$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It prints `John Miller`.

 - It prints `test-session-123 John`.

 - It prints `test-session-123 Miller`.

 - It prints `test-session-123 John Miller`.


/// type=SS, answer=[1]

Which of the following is a superglobal variable?

 - `$_SESSION`

 - `session_id()`

 - `session_start()`

 - `"test-session-123"`

 - `session_id("test-session-123")`


/// type=MS, answer=[3,4]

Which of the following are session variables?

 - `session_id()`

 - `session_start()`

 - `$_SESSION["lastName"]`

 - `$_SESSION["firstName"]`

 - `session_id("test-session-123")`


/// type=SS, answer=[2]

Which function creates a new session?

 - `session_id()`

 - `session_start()`

 - `$_SESSION["lastName"]`

 - `$_SESSION["firstName"]`

 - `session_id("test-session-123")`


/// type=SS, answer=[1]

On line 3, what does `session_id("test-session-123");` do?

 - It sets the session ID to `test-session-123`.

 - It returns the session ID `test-session-123`.

 - It displays the session ID `test-session-123`.

 - It removes the session ID `test-session-123`.

 - It accesses the session ID `test-session-123`.


/// type=SS, answer=[3]

Which statement best describes the code on line 5?

 - It returns the value `John` of the `$_SESSION["firstName"]` session variable.

 - It creates the value `John` of the `$_SESSION["firstName"]` session variable.

 - It assigns the value `John` to the `$_SESSION["firstName"]` session variable.

 - It accesses the value `John` in the `$_SESSION["firstName"]` session variable.

 - It removes the value `John` from the `$_SESSION["firstName"]` session variable.


/// type=MS, answer=[2,5]

In the `echo` statement on line 8, what does `session_id()` do?

 - It sets the session ID to `test-session-123`.

 - It returns the session ID `test-session-123`.

 - It displays the session ID `test-session-123`.

 - It removes the session ID `test-session-123`.

 - It accesses the session ID `test-session-123`.

:::


:::

/// type=REPL

```php
<?php
session_start();
session_id("test-session-123");
 
$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```
/// type=MS, answer=[1,4]

Add the statement `unset($_SESSION["firstName"]);` on line 7. Execute the program. What are its outputs?

 - It produces an error.

 - No output is displayed.

 - It prints `test-session-123 John`.

 - It prints `test-session-123 Miller`.

 - It prints `test-session-123 John Miller`.

:::


:::

/// type=REPL

```php
<?php
session_start();
session_id("test-session-123");
 
$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";
unset($_SESSION["firstName"]);
echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```
/// type=MS, answer=[3,4,5]

Why does adding the statement `unset($_SESSION["firstName"]);` produce an error?

 - On line 7, the key `firstName` is enclosed in double quotes `""`. 

 - On line 7, the `unset($_SESSION["firstName"]);` statement is invalid.

 - The `$_SESSION["firstName"]` session variable is no longer accessible on line 8.

 - The session data of the `$_SESSION["firstName"]` session variable does not exists.

 - On line 7, the `unset($_SESSION["firstName"]);` statement removes the `$_SESSION["firstName"]` session variable.


/// type=SS, answer=[1]

What does `unset($_SESSION["firstName"]);` do?

 - It deletes the `$_SESSION["firstName"]` session variable.

 - It defines the `$_SESSION["firstName"]` session variable.

 - It returns the `$_SESSION["firstName"]` session variable.

 - It displays the `$_SESSION["firstName"]` session variable.

 - It accesses the `$_SESSION["firstName"]` session variable.

:::


:::

/// type=REPL, readonly=true

```php
<?php
session_start();

if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        echo "Hello, " . $_POST['username'] . '.';
    }
}
?>

<html>
    <body>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
```
/// type=SS, choiceType=HTML, answer=[5]

Execute the program. What is its output?

 - <form action="" method="post">
            <input type="submit" value="Submit">
            <input type="password" name="password" placeholder="Password" required> 
    </form>

 - <form action="" method="post">
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Submit">
    </form>

 - <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="submit" value="Submit">
    </form>

 - <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
    </form>

 - <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Submit">
    </form>


/// type=SS, answer=[5]

In the browser window, click the `Submit` button. What is its result?

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, user.`.

 - It displays a message `This is a required field`.


/// type=SS, answer=[5]

In the browser window, replace `Username` with `Charles` and `Password` with `12345`. Click the `Submit` button. What is its output?

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, user.`.

 - It prints `Hello, Charles.`.


/// type=MS, answer=[2,3,4]

Which of the following are functions?

 - `$_POST`

 - `empty()`

 - `isset()`

 - `session_start()`

 - `$_POST['password']`


/// type=SS, answer=[5]

In the `if` statement on line 5, what is `$_POST`?

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is an operator.

 - It is a superglobal variable.


/// type=SS, answer=[5]

In the `if` statement on line 5, what does `$_POST['username']` do?

 - It sets the value of `username` in the form submitted through the HTTP POST method.

 - It creates the value of `username` in the form submitted through the HTTP POST method.

 - It defines the value of `username` in the form submitted through the HTTP POST method.

 - It removes the value of `username` from the form submitted through the HTTP POST method.

 - It accesses the value of `username` from the form submitted through the HTTP POST method.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[1]

Which statement is true about a session?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=MS, answer=[1,3]

Which of the following are superglobal variables?

 - `$_POST`

 - `unset()`

 - `$_SESSION`

 - `session_id()`

 - `session_start()`


/// type=SS, answer=[2]

Which statement best describes the `session_start()` function?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=SS, answer=[1]

Which statement best describes the `session_id()` function?

 - It is used to set and access a session ID.

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=SS, answer=[1]

Which statement is true about the `$_SESSION` superglobal variable?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=SS, answer=[4]

Which statement is true about the `$_POST` superglobal variable?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
$_SESSION["name"] = "Diana";

session_start();
 
echo 'Welcome, ' . $_SESSION["name"] . '!';
?>
```
/// type=MS, answer=[2,3]

Execute the program. What are its outputs?

 - It prints `Diana`.

 - It produces an error.

 - It prints `Welcome, !`.

 - No output is displayed.

 - It prints `Welcome, Diana!`.


/// type=SS, answer=[1]

What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 4, the `session_start();` function call is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is no argument specified in the `session_start()` function call on line 4.

 - On line 2, the `name` key in the `$_SESSION` superglobal variable does not exist.

 - The call to the `session_start()` function should be written before `$_SESSION["name"] = "Diana";` on line 2.

:::


/// type=CR, answer=[tests/Sessions/MisplacedSessionStartFunctionTest.php]

Correct the code so that it outputs the string `Welcome, Diana!`.

```php
<?php
$_SESSION["name"] = "Diana";

session_start();
 
echo 'Welcome, ' . $_SESSION["name"] . '!';
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
session_start();
 
$_SESSION["name"] = "Diana";

echo 'Welcome, ' . $_SESSION[] . '!';
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, answer=[2,3]

Which statements correctly describe the error?

 - On line 2, the `session_start();` function call is invalid.

 - There is no `name` key specified in `$_SESSION[]` on line 6.

 - On line 6, `$_SESSION[]` in the `echo` statement is incorrect.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is no argument specified in the `session_start()` function call on line 2.

:::


/// type=CR, answer=[tests/Sessions/MissingKeyOnSessionVariableTest.php]

Correct the code so that it outputs the string `Welcome, Diana!`.

```php
<?php
session_start();
 
$_SESSION["name"] = "Diana";

echo 'Welcome, ' . $_SESSION[] . '!';
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
session_start();
session_id("test-session-123);

$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - On line 2, the `session_start();` function call is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - On line 3, the statement `session_id("test-session-123);` is invalid.

 - There is no argument specified in the `session_start()` function call on line 2.

 - On line 3, the argument `test-session-123` in the `session_id()` function is not properly enclosed in double quotes `""`. 

:::


/// type=CR, answer=[tests/Sessions/MisquotedSessionIdArgumentTest.php]

Correct the code so that it outputs the string `test-session-123 John Miller`.

```php
<?php
session_start();
session_id("test-session-123);

$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
sessionstart();
session_id("test-session-123");

$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - On line 2, the statement `sessionstart();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - On line 2, the `session_start()` function is miswritten as `sessionstart()`.

 - There is no argument specified in the `session_start()` function call on line 2.

 - On line 3, the argument `test-session-123` in the `session_id()` function is not properly enclosed in double quotes `""`. 

:::


/// type=CR, answer=[tests/Sessions/IncorrectSessionStartFunctionTest.php]

Correct the code so that it outputs the string `test-session-123 John Miller`.

```php
<?php
sessionstart();
session_id("test-session-123");

$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
session_start();
session_id("test-session-123");
 
$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";
unset($_SESSION["firstName"]);
echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 8, accessing the `$_SESSION["firstName"]` session variable is invalid.

 - There is no argument specified in the `session_start()` function call on line 2.

 - The `$_SESSION["firstName"]` session variable is no longer accessible on line 8.

 - The `firstName` key in the `$_SESSION` superglobal variable is not enclosed in double quotes `""`.

 - On line 7, the `unset($_SESSION["firstName"]);` statement removes the `$_SESSION["firstName"]` session variable.

:::


/// type=CR, answer=[tests/Sessions/UndefinedFirstnameSessionVariableTest.php]

Correct the code so that it outputs the string `test-session-123 John Miller`.

```php
<?php
session_start();
session_id("test-session-123");
 
$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";
unset($_SESSION["firstName"]);
echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Sessions/CreateAndAccessSessionVariablesTest.php]

Write a program that uses `session_start()` and `$_SESSION` to create and access session data. First, add the `session_start();` function call to start a new session. Then, add a statement that calls the `session_id()` function with the argument `practice-session-101`. Next, create the session variables `$_SESSION["name"]` and `$_SESSION["password"]`, and assign the values `James` and `123-pass` respectively. Add another statement `echo session_id() . ' ' . $_SESSION["name"];`. Then, run the program to view the output.

```php
<?php



?>
```

+++