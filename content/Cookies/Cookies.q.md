# Cookies

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
setcookie("user", "My Cookie", time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE['user'];
}
?>
```
/// type=SS, id=92a89979-1cea-4155-86d8-909a8c0a2ac5, answer=[4]

Execute the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, id=9ab1416e-dc4c-45cb-9042-d0309a5688ae, answer=[5]

Reload the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, id=21b75c9b-de14-472c-9535-b55b4b0e9c2a, answer=[4]

Why is there no output displayed the first time you execute the program?

 - The `user` cookie has already expired.

 - There is no cookie named `user` that is set in the program.

 - There is no `setcookie()` function specified in the program.

 - The `user` cookie is not yet defined during the first execution of the program.

 - The statement `setcookie("user", "My Cookie", time() + 60);` is invalid.


/// type=SS, id=5e9878c7-8236-4650-8165-442878da55eb, answer=[2]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what is `setcookie()`?

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a construct.

 - It is a parameter.


/// type=SS, id=20a72603-9671-4ff1-b515-3512729f2d5c, answer=[1]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what does `user` indicate?

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, id=bbcc2a34-271b-4f39-b476-985883d8aa4c, answer=[2]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what does `My Cookie` indicate?

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, id=a4386cfc-f01f-460e-acf2-0caba968e3d4, answer=[3]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what does `time() + 60` indicate?

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, id=c6ce65d7-25bf-4551-928d-bd7a3681333c, answer=[2]

On line 2, what does `setcookie("user", "My Cookie", time() + 60);` do?

 - It checks if the `user` cookie with the value `My Cookie` is set in `60` seconds.

 - It creates the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It deletes the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It displays the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It accesses the `user` cookie with the value `My Cookie` that expires in `60` seconds.
 

/// type=SS, id=ecb46177-a633-478b-8093-36fcf8bf22ef, answer=[5]

In the `if` statement on lines 4 and 5, what is `$_COOKIE`?

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is an argument.

 - It is a superglobal variable.


/// type=SS, id=9af71b02-fb3b-4502-a02a-b2d14e431cbe, answer=[5]

On line 4, what does `isset($_COOKIE['user'])` do?

 - It creates the `user` cookie.

 - It deletes the `user` cookie.

 - It displays the `user` cookie.

 - It defines the `user` cookie.
 
 - It checks whether the `user` cookie is set or not.


/// type=SS, id=56b70b76-6b99-4dff-8685-45508aca6ea0, answer=[5]

On lines 4 and 5, what does `$_COOKIE['user']` do?

 - It checks the value of the `user` cookie.

 - It creates the value of the `user` cookie.

 - It deletes the value of the `user` cookie.

 - It displays the value of the `user` cookie.

 - It accesses the value of the `user` cookie.
 

/// type=MS, id=168e8e67-de68-4b18-b438-02fbffdfd4a0, answer=[1,2,3]

Which statements correctly describe the code on lines 4, 5, and 6?

 - It checks whether the `user` cookie is set or not.

 - It executes the `echo` statement on line 5 if the `user` cookie exists.

 - The `if` construct evaluates the value returned by `isset($_COOKIE['user'])`.

 - It creates the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It deletes the `user` cookie with the value `My Cookie` that expires in `60` seconds.

:::


:::

/// type=REPL, readonly=true

```php
<?php
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time() + 60;

setcookie($cookieName, $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[$cookieName])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```
/// type=SS, id=6b87a000-8713-4ac0-bb40-9eb2371091c9, answer=[4]

Execute the program. What is its output?

 - It prints `my_cookie`.

 - It produces an error.

 - No output is displayed.

 - It prints `Sorry, a cookie is not found!`.

 - It prints `Cookie Value: This is my cookie.`.


/// type=SS, id=5f936ca4-f674-4d78-8300-af02d1f3e93e, answer=[5]

Reload the program. What is its output?

 - It prints `my_cookie`.

 - It produces an error.

 - No output is displayed.

 - It prints `Sorry, a cookie is not found!`.

 - It prints `Cookie Value: This is my cookie.`.


/// type=MS, id=5fef0de5-3ab9-4482-b47e-cfdb8988632b, answer=[1,4]

Which of the following are functions?

 - `isset()`

 - `$expiry`

 - `$_COOKIE`

 - `setcookie()`

 - `$cookieValue`


/// type=SS, id=713d2629-4cf4-410c-a5c8-5f0cc56c1c6c, answer=[2]

Which of the following is a superglobal variable?

 - `$expiry`

 - `$_COOKIE`

 - `setcookie()`

 - `$cookieName`

 - `$cookieValue`


/// type=SS, id=0661ee0d-3357-49aa-9c7a-4d2fdf02bdfc, answer=[2]

On line 6, what does the `setcookie()` function do?

 - It checks if the `my_cookie` cookie with the value `This is my cookie.` is set in `60` seconds.

 - It creates the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.

 - It deletes the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.

 - It displays the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.

 - It accesses the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.


/// type=SS, id=e7e12027-ada9-44f3-b789-460a5c273a33, answer=[1]

On line 6, what does the argument `$cookieName` represent? 

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, id=f8a621ae-5908-45ca-b9e7-ec7a27510a93, answer=[5]

Which statement best describes `$_COOKIE[$cookieName]`?

 - It checks the value of the cookie in `$cookieName`.

 - It creates the value of the cookie in `$cookieName`.

 - It deletes the value of the cookie in `$cookieName`.

 - It displays the value of the cookie in `$cookieName`.

 - It accesses the value of the cookie in `$cookieName`.

:::


:::

/// type=REPL

```php
<?php
setcookie("user", "My Cookie", time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE['user'];
}
?>
```
/// type=SS, id=38c86c31-3171-4024-bb47-8099a1e2aa29, answer=[4]

Execute the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, id=bb884279-65a7-4d03-ae45-ecc683bb9a38, answer=[5]

Reload the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, id=340b6ab8-096a-46e7-9143-826c56a6aadb, answer=[4]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, replace `time() + 60` with `time() - 3600`. Execute and reload the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.

:::


:::

/// type=REPL

```php
<?php
setcookie("user", "My Cookie", time() - 3600);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE['user'];
}
?>
```
/// type=MS, id=6e8ae29f-3465-4123-988f-6dd5379775d6, answer=[2,5]

Why is there no output displayed after replacing `time() + 60` with `time() - 3600`?

 - There is no cookie named `user` that is set in the program.

 - `time() - 3600` sets the `user` cookie expiration time to one hour ago.

 - The `user` cookie is not yet defined during the execution of the program.

 - The statement `setcookie("user", "My Cookie", time() - 3600);` is invalid.

 - Setting the expiration time to `time() - 3600` deletes the `user` cookie stored in the user's computer.


/// type=SS, id=5a647c0c-c714-47a7-942c-4202d74ae1c6, answer=[5]

In the statement `setcookie("user", "My Cookie", time() - 3600);` on line 2, what does `time() - 3600` do?

 - It removes the expiration time of the `user` cookie.

 - It accesses the expiration time of the `user` cookie.

 - It sets the expiration time of the `user` cookie to one hour.

 - It sets the expiration time of the `user` cookie to `60` seconds.

 - It sets the expiration time of the `user` cookie to one hour ago.


/// type=SS, id=987a9d19-e0e7-4066-a85e-60c86ab3175c, answer=[2]

Which statement best describes `setcookie("user", "My Cookie", time() - 3600);` on line 2?

 - It creates the `user` cookie.

 - It deletes the `user` cookie.

 - It checks if the `user` cookie is set.

 - It displays the value of the `user` cookie.

 - It accesses the value of the `user` cookie.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=7d27a650-65e3-499a-83f7-1b58d6d5aa64, answer=[3,4]

Which statements are true about a cookie?

 - It accesses a cookie value.

 - It creates and deletes cookies in PHP.

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes. 

 - It sends a URL encoded cookie together with the rest of the HTTP headers.


/// type=MS, id=073b97db-48cc-43cb-a7fb-67748e09f853, answer=[2,5]

Which statements correctly describe the `setcookie()` function?

 - It accesses a cookie value.

 - It creates and deletes cookies in PHP.

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes. 

 - It sends a URL encoded cookie together with the rest of the HTTP headers.


/// type=MS, id=c85b286a-e949-4319-b919-ac15f41f4203, answer=[2,3,4,5]

Which of the following are `setcookie()` parameters?

 - `URL`

 - `name`

 - `value`

 - `domain`

 - `expires`


/// type=SS, id=3b319258-df72-4b7c-aae9-3996cb71f078, answer=[1]

Which statement best describes the `$_COOKIE` superglobal variable.

 - It is used to access a cookie value.

 - It creates and deletes cookies in PHP.

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes. 

 - It sends a URL encoded cookie together with the rest of the HTTP headers.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
setcookie("user", "My Cookie" time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE['user'];
}
?>
```
/// type=SS, id=a38a9b57-865f-43b6-9e43-391cab62bb6a, answer=[2]

Execute the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, id=a8a4a43c-3fc8-4bbf-8325-6ddc118af5cf, answer=[4]

What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, id=71dc90f2-dfd3-4de4-b2d4-5389d734ea9a, answer=[4,5]

Which statements correctly describe the error?

 - There is no open parenthesis `(` after `setcookie` on line 2.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is an addition operator `+` specified between `time()` and `60` on line 2.

 - There is no comma `,` specified between `"My Cookie"` and `time() + 60` on line 2.

 - On line 2, the statement `setcookie("user", "My Cookie" time() + 60);` is invalid.

:::


/// type=CR, id=b7d8ddaf-8eab-4e75-a2d5-089a23ec1622, answer=[tests/Cookies/b7d8ddaf-8eab-4e75-a2d5-089a23ec1622]

Correct the code so that it creates a cookie named `user` and outputs the string `The cookie value is: My Cookie` when reloading the program.

```php
<?php
setcookie("user", "My Cookie" time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE['user'];
}
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
setcookie("user", "My Cookie", time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE'user'];
}
?>
```
/// type=SS, id=785302cc-2387-4ba1-86a7-c710612e9d29, answer=[5]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, id=7b11ccbf-380b-4adb-b899-90a0195cc093, answer=[1,2]

Which statements correctly describe the error?

 - There is no open square bracket `[` after `$_COOKIE` on line 5.

 - On line 5, `$_COOKIE'user']` in the `echo` statement is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is no addition operator `+` specified between `time()` and `60` on line 2.

 - There is no open curly brace `{` after `if (isset($_COOKIE['user']))` on line 4.

:::


/// type=CR, id=ddeb523f-526c-4cdb-9445-a8a419474bf8, answer=[tests/Cookies/ddeb523f-526c-4cdb-9445-a8a419474bf8]

Correct the code so that it creates a cookie named `user` and outputs the string `The cookie value is: My Cookie` when reloading the program.

```php
<?php
setcookie("user", "My Cookie", time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE'user'];
}
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time()  60;

setcookie($cookieName, $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>  
        <?php  
        if(!isset($_COOKIE[$cookieName])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```
/// type=SS, id=4f48fd2a-db84-4c4a-a8a7-ba224f901e82, answer=[3]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, id=f17899e3-d55b-43a2-ad9d-c8ecbd79a841, answer=[1,3]

Which statements correctly describe the error?

 - On line 4, the statement `$expiry = time()  60;` is invalid.

 - There is no semicolon `;` at the end of the statement on line 3.

 - There is no addition operator `+` specified between `time()` and `60` on line 4.

 - On line 6, the argument `$cookieValue` is not enclosed in double quotes `""`.

 - There is no comma `,` specified between `$cookieValue` and `$expiry` on line 6.

:::


/// type=CR, id=0263d7e9-a562-439f-9d87-f60d4842e6d2, answer=[tests/Cookies/0263d7e9-a562-439f-9d87-f60d4842e6d2]

Correct the code so that it creates a cookie named `my_cookie` and outputs the string `Cookie Value: This is my cookie.` when reloading the program.

```php
<?php
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time()  60;

setcookie($cookieName, $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[$cookieName])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```


:::

/// type=REPL, readonly=true

```php
<?php
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time() + 60;

setcookie($cookieName, $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```
/// type=SS, id=a4967d08-8e4e-40a9-9e23-0e202a0f7b9c, answer=[1]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, id=c7a7257c-837b-44f4-9154-df3cd65f2aeb, answer=[3,4]

Which statements correctly describe the error?

 - There is no open curly brace `{` after `if(!isset($_COOKIE[]))` on line 15.

 - There is an exclamation symbol `!` before the `isset()` function call on line 15.

 - On line 15, the `isset($_COOKIE[])` function call in the `if` construct is invalid.

 - There is no argument specified in the `$_COOKIE[]` superglobal variable on line 15.

 - On line 15, the `$_COOKIE[]` superglobal variable is not enclosed in double quotes `""`.

:::


/// type=CR, id=749e1ec5-b953-4375-8b13-bb276f945b64, answer=[tests/Cookies/749e1ec5-b953-4375-8b13-bb276f945b64]

Correct the code so that it creates a cookie named `my_cookie` and outputs the string `Cookie Value: This is my cookie.` when reloading the program.

```php
<?php
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time() + 60;

setcookie($cookieName, $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```


:::

/// type=REPL, readonly=true

```php
<?php  
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time() + 60;

setcookie("", $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[$cookieName])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```
/// type=SS, id=0f0b2f8a-2460-4d60-919e-e30994b2c486, answer=[2]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, id=f1a9e327-f096-4a67-93e4-09b9f0b0a559, answer=[1,2,5]

Which statements correctly describe the error?

 - The first argument `""` in the `setcookie()` function is not allowed.

 - There is no cookie name specified in the `setcookie()` function on line 6.

 - On line 6, the argument `$cookieValue` is not enclosed in double quotes `""`.

 - There is no comma `,` specified between `$cookieValue` and `$expiry` on line 6.

 - On line 6, the statement `setcookie("", $cookieValue, $expiry);` is invalid.

:::


/// type=CR, id=1295b326-01f4-4ccd-99b5-e16d6dcf87bd, answer=[tests/Cookies/1295b326-01f4-4ccd-99b5-e16d6dcf87bd]

Correct the code so that it creates a cookie named `my_cookie` and outputs the string `Cookie Value: This is my cookie.` when reloading the program.

```php
<?php  
$cookieName = "my_cookie";  
$cookieValue = "This is my cookie.";
$expiry = time() + 60;

setcookie("", $cookieValue, $expiry);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[$cookieName])) {  
            echo "Sorry, a cookie is not found!";  
        } else {
            echo "<br/>Cookie Value: " . $_COOKIE[$cookieName];  
        }
        ?>
    </body>
</html>
```


+++


+++

### Part 4: Practice

/// type=CR, id=98363053-945e-43a2-8602-3c1ca6e96957, answer=[tests/Cookies/98363053-945e-43a2-8602-3c1ca6e96957]

Write a program that uses `setcookie()` and `$_COOKIE` to create and access cookies. First, use the `setcookie()` function that passes the arguments `test_cookie`, `This is a test cookie.`, and `time() + 360` respectively. Next, add an `if` statement that uses `isset()` and `$_COOKIE` to evaluate whether the `test_cookie` cookie is set or not. Inside the `if` block, add the statement `echo "Cookie Value: " . $_COOKIE['test_cookie'];`. Then, run the program to view the output.

```php
<?php


?>
```

+++
