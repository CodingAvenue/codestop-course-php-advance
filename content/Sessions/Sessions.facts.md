### Facts for Sessions lesson:

A session is a way to store information state and history of user activities in a certain application using a unique session ID. 

The `session_start()` function creates new or resumes a certain session.

The `session_destroy()` function destroys the entire session variables in PHP.

The `unset()` function is used to destroy a specific session variable.

The `$_SESSION` superglobal variable is used to store and access session data.

The `session_id()` function sets and accesses a session ID. By default, PHP sessions generate a session ID randomly.

The `$_POST` superglobal variable is used to collect form data submitted through the HTTP POST method.

Code:

```php
<?php
session_start();
 
$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo 'Hello, ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>
```

Output:

```
Hello, John Miller
```

In the example above, the code breaks down as follows:

 - `session_start();` starts a new session.

 - `$_SESSION["firstName"] = "John";` and `$_SESSION["lastName"] = "Miller";` assign session data `John` and `Miller` to `$_SESSION["firstName"]` and `$_SESSION["lastName"]` session variables respectively.

 - `$_SESSION["firstName"]` and `$_SESSION["lastName"]` access session data.