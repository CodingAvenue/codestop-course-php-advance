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
/// type=SS, id=d1da54aa-3f1c-496a-9e18-62468beb54d3, answer=[5]

Execute the program. What is its output?

 - It prints `name`.

 - It prints `Diana`.

 - It prints `session`.

 - It prints `Welcome,`.

 - It prints `Welcome, Diana!`.


/// type=SS, id=c9d8626e-7e29-4015-9f8d-007486531da0, answer=[3]

What is `session_start()` on line 2?

 - It is a session.

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is a session variable.


/// type=SS, id=24e988f4-fe4c-4787-a901-664ca01711b4, answer=[3]

On line 2, what does `session_start();` do?

 - It removes a session.

 - It displays session data.

 - It creates a new session.

 - It deletes a session variable.

 - It accesses a session variable.


/// type=SS, id=85723c4e-2630-470c-8c3a-c965b9524196, answer=[5]

In the statement `$_SESSION["name"] = "Diana";` on line 4, what is `$_SESSION`?

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is an operator.

 - It is a superglobal variable.


/// type=SS, id=d81171e9-ece8-41bc-af02-2151314f4a0d, answer=[5]

In the statement `$_SESSION["name"] = "Diana";` on line 4, what is `$_SESSION["name"]`?

 - It is a value.

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is a session variable.


/// type=SS, id=e2c38f49-53c3-4802-91a6-29b553debd40, answer=[1]

In the statement `$_SESSION["name"] = "Diana";` on line 4, what is `Diana`?

 - It is a value.

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is a session variable.


/// type=SS, id=f73a8136-fc9a-478f-b1b6-c4467fe99a09, answer=[3]

Which statement best describes `$_SESSION["name"] = "Diana";` on line 4?

 - It returns the value `Diana` of the `$_SESSION["name"]` session variable.

 - It creates the value `Diana` of the `$_SESSION["name"]` session variable.

 - It assigns the value `Diana` to the `$_SESSION["name"]` session variable.

 - It accesses the value `Diana` in the `$_SESSION["name"]` session variable.

 - It removes the value `Diana` from the `$_SESSION["name"]` session variable.


/// type=SS, id=f2aecb23-ae9e-4c82-9e03-5f72f0c7b6ad, answer=[5]

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
/// type=SS, id=f86ed343-b8fd-4854-a226-3461f79b5232, answer=[5]

Execute the program. What is its output?

 - It prints `John`.

 - It prints `John Miller`.

 - It prints `test-session-123 John`.

 - It prints `test-session-123 Miller`.

 - It prints `test-session-123 John Miller`.


/// type=SS, id=6bb44d96-6126-45ab-8ee6-d2bcdea53a6b, answer=[1]

Which of the following is a superglobal variable?

 - `$_SESSION`

 - `session_id()`

 - `session_start()`

 - `"test-session-123"`

 - `session_id("test-session-123")`


/// type=MS, id=a62520fe-e58b-4aba-84ef-425fd7e59a91, answer=[3,4]

Which of the following are session variables?

 - `session_id()`

 - `session_start()`

 - `$_SESSION["lastName"]`

 - `$_SESSION["firstName"]`

 - `session_id("test-session-123")`


/// type=SS, id=1907932e-d9ba-4913-8df6-1a796b3f182e, answer=[2]

Which function creates a new session?

 - `session_id()`

 - `session_start()`

 - `$_SESSION["lastName"]`

 - `$_SESSION["firstName"]`

 - `session_id("test-session-123")`


/// type=SS, id=b8aded39-05e6-4b68-b802-d570c4556fbb, answer=[1]

On line 3, what does `session_id("test-session-123");` do?

 - It sets the session ID to `test-session-123`.

 - It returns the session ID `test-session-123`.

 - It displays the session ID `test-session-123`.

 - It removes the session ID `test-session-123`.

 - It accesses the session ID `test-session-123`.


/// type=SS, id=535640b8-b3f8-4022-8ee3-9115b8f84ff7, answer=[3]

Which statement best describes the code on line 5?

 - It returns the value `John` of the `$_SESSION["firstName"]` session variable.

 - It creates the value `John` of the `$_SESSION["firstName"]` session variable.

 - It assigns the value `John` to the `$_SESSION["firstName"]` session variable.

 - It accesses the value `John` in the `$_SESSION["firstName"]` session variable.

 - It removes the value `John` from the `$_SESSION["firstName"]` session variable.


/// type=MS, id=3318ac8e-4bf0-4b76-a58b-c0439099a94e, answer=[2,5]

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
/// type=MS, id=473eac0d-ace7-4577-a173-3b3cc9e50731, answer=[1,4]

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
/// type=MS, id=b24c4bbe-5f5e-40db-8faf-2ef61dde4346, answer=[3,4,5]

Why does adding the statement `unset($_SESSION["firstName"]);` produce an error?

 - On line 7, the key `firstName` is enclosed in double quotes `""`. 

 - On line 7, the `unset($_SESSION["firstName"]);` statement is invalid.

 - The `$_SESSION["firstName"]` session variable is no longer accessible on line 8.

 - The session data of the `$_SESSION["firstName"]` session variable does not exists.

 - On line 7, the `unset($_SESSION["firstName"]);` statement removes the `$_SESSION["firstName"]` session variable.


/// type=SS, id=8d649459-3d59-446a-ba4e-dc9dc4d5f03d, answer=[1]

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
/// type=SS, id=7e7fe807-d8f0-4f2f-8ad8-39065d192b42, answer=[5]

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


/// type=SS, id=a4c40767-ce72-4280-b16b-f0c330e36065, answer=[5]

In the browser window, click the `Submit` button. What is its result?

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, user.`.

 - It displays a message `This is a required field`.


/// type=SS, id=c7243cc9-f551-4df8-916b-8579d1cf3ded, answer=[5]

In the browser window, replace `Username` with `Charles` and `Password` with `12345`. Click the `Submit` button. What is its output?

 - It prints `Hello`.

 - It produces an error.

 - No output is displayed.

 - It prints `Hello, user.`.

 - It prints `Hello, Charles.`.


/// type=MS, id=39e726f3-7284-439a-a4f4-3dae230ef5fd, answer=[2,3,4]

Which of the following are functions?

 - `$_POST`

 - `empty()`

 - `isset()`

 - `session_start()`

 - `$_POST['password']`


/// type=SS, id=0d670141-9c6d-4ad6-8291-cbc947c5e725, answer=[5]

In the `if` statement on line 5, what is `$_POST`?

 - It is a keyword.

 - It is a function.

 - It is a construct.

 - It is an operator.

 - It is a superglobal variable.


/// type=SS, id=0d9e5b04-43b9-4aae-895c-d890e16bb86c, answer=[5]

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

/// type=SS, id=aff6e7ab-c9b1-43fe-9d8f-270058675e87, answer=[1]

Which statement is true about a session?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=MS, id=598f6b0f-6a50-4b26-9b16-8469ab78a5d0, answer=[1,3]

Which of the following are superglobal variables?

 - `$_POST`

 - `unset()`

 - `$_SESSION`

 - `session_id()`

 - `session_start()`


/// type=SS, id=9b983535-91ff-4b26-ad3a-cdcbe1586df1, answer=[2]

Which statement best describes the `session_start()` function?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=SS, id=8b988735-2c59-4062-af90-dcb0f5eb9fc5, answer=[1]

Which statement best describes the `session_id()` function?

 - It is used to set and access a session ID.

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=SS, id=e6d23293-341a-475b-ae6c-66c15dd2e133, answer=[1]

Which statement is true about the `$_SESSION` superglobal variable?

 - It is used to store and access session data.

 - It creates new or resumes a certain session.

 - It is used to destroy a specific session variable.

 - It is used to collect form data submitted through the HTTP POST method.

 - It is a way to store information state and history of user activities in a certain application using a unique session ID.


/// type=SS, id=d0bedce5-e344-43e8-a18f-22900fbc7611, answer=[4]

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
/// type=MS, id=59b063ab-45cd-41a1-9550-8ad2fe664cc6, answer=[2,3]

Execute the program. What are its outputs?

 - It prints `Diana`.

 - It produces an error.

 - It prints `Welcome, !`.

 - No output is displayed.

 - It prints `Welcome, Diana!`.


/// type=SS, id=3b9d1379-d677-45e9-99e2-bc197d0c17c1, answer=[1]

What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, id=681d80f8-c36c-40ea-893b-cc7518099b76, answer=[1,5]

Which statements correctly describe the error?

 - On line 4, the `session_start();` function call is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is no argument specified in the `session_start()` function call on line 4.

 - On line 2, the `name` key in the `$_SESSION` superglobal variable does not exist.

 - The call to the `session_start()` function should be written before `$_SESSION["name"] = "Diana";` on line 2.

:::


/// type=CR, id=1cf4b927-6d18-44f2-81a3-aa9b4ed4be69, answer=[tests/Sessions/MisplacedSessionStartFunctionTest.php]

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
/// type=SS, id=877f2fef-192a-4ee8-86b4-89ba7994edf0, answer=[3]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, id=b4fa6b02-9064-4d0b-9edd-e30fa926d38d, answer=[2,3]

Which statements correctly describe the error?

 - On line 2, the `session_start();` function call is invalid.

 - There is no `name` key specified in `$_SESSION[]` on line 6.

 - On line 6, `$_SESSION[]` in the `echo` statement is incorrect.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is no argument specified in the `session_start()` function call on line 2.

:::


/// type=CR, id=64871d7a-dbc4-4f38-a39b-701dfbce83e6, answer=[tests/Sessions/MissingKeyOnSessionVariableTest.php]

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
/// type=SS, id=caaaad45-b356-4d33-8750-db88b06cf609, answer=[5]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, id=c63d6b15-3825-4a9d-ba11-9c4917d7809a, answer=[3,5]

Which statements correctly describe the error?

 - On line 2, the `session_start();` function call is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - On line 3, the statement `session_id("test-session-123);` is invalid.

 - There is no argument specified in the `session_start()` function call on line 2.

 - On line 3, the argument `test-session-123` in the `session_id()` function is not properly enclosed in double quotes `""`. 

:::


/// type=CR, id=7d433c76-4581-4820-a844-9e7ba279ff11, answer=[tests/Sessions/MisquotedSessionIdArgumentTest.php]

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
/// type=SS, id=25be2b66-8299-4e10-8ebb-689121f168a4, answer=[4]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, id=5be890d8-999b-4b3b-b7fa-c18a35403222, answer=[1,3]

Which statements correctly describe the error?

 - On line 2, the statement `sessionstart();` is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - On line 2, the `session_start()` function is miswritten as `sessionstart()`.

 - There is no argument specified in the `session_start()` function call on line 2.

 - On line 3, the argument `test-session-123` in the `session_id()` function is not properly enclosed in double quotes `""`. 

:::


/// type=CR, id=20af4580-301f-4b39-ae3e-08149ff5475c, answer=[tests/Sessions/IncorrectSessionStartFunctionTest.php]

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
/// type=SS, id=62ada021-5ce7-4408-9308-b87485025f32, answer=[2]

Execute the program. What is the error message?

 - Undefined index: `name` on line number 6

 - Undefined index: `firstName` on line number 8

 - Fatal error: Cannot use `[]` for reading on line number 6

 - Uncaught Error: Call to undefined function `sessionstart()` on line number 2

 - syntax error, unexpected `'"'`, expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) on line number 5


/// type=MS, id=023581d5-120f-425d-88fa-3710dec5b93c, answer=[1,3,5]

Which statements correctly describe the error?

 - On line 8, accessing the `$_SESSION["firstName"]` session variable is invalid.

 - There is no argument specified in the `session_start()` function call on line 2.

 - The `$_SESSION["firstName"]` session variable is no longer accessible on line 8.

 - The `firstName` key in the `$_SESSION` superglobal variable is not enclosed in double quotes `""`.

 - On line 7, the `unset($_SESSION["firstName"]);` statement removes the `$_SESSION["firstName"]` session variable.

:::


/// type=CR, id=4d94c074-db22-4114-ad53-cab3c7bdf168, answer=[tests/Sessions/UndefinedFirstnameSessionVariableTest.php]

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

/// type=CR, id=a818f5f0-0636-4d20-9dd3-a713bd48e412, answer=[tests/Sessions/CreateAndAccessSessionVariablesTest.php]

Write a program that uses `session_start()` and `$_SESSION` to create and access session data. First, add the `session_start();` function call to start a new session. Then, add a statement that calls the `session_id()` function with the argument `practice-session-101`. Next, create the session variables `$_SESSION["name"]` and `$_SESSION["password"]`, and assign the values `James` and `123-pass` respectively. Add another statement `echo session_id() . ' ' . $_SESSION["name"];`. Then, run the program to view the output.

```php
<?php



?>
```

+++