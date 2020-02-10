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
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, answer=[5]

Reload the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, answer=[4]

Why is there no output displayed the first time you execute the program?

 - The `user` cookie has already expired.

 - There is no cookie named `user` that is set in the program.

 - There is no `setcookie()` function specified in the program.

 - The `user` cookie is not yet defined during the first execution of the program.

 - The statement `setcookie("user", "My Cookie", time() + 60);` is invalid.


/// type=SS, answer=[2]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what is `setcookie()`?

 - It is a keyword.

 - It is a function.

 - It is an operator.

 - It is a construct.

 - It is a parameter.


/// type=SS, answer=[1]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what does `user` indicate?

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, answer=[2]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what does `My Cookie` indicate?

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, answer=[3]

In the statement `setcookie("user", "My Cookie", time() + 60);` on line 2, what does `time() + 60` indicate?

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, answer=[2]

On line 2, what does `setcookie("user", "My Cookie", time() + 60);` do?

 - It checks if the `user` cookie with the value `My Cookie` is set in `60` seconds.

 - It creates the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It deletes the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It displays the `user` cookie with the value `My Cookie` that expires in `60` seconds.

 - It accesses the `user` cookie with the value `My Cookie` that expires in `60` seconds.
 

/// type=SS, answer=[5]

In the `if` statement on lines 4 and 5, what is `$_COOKIE`?

 - It is a method.

 - It is a keyword.

 - It is an operator.

 - It is an argument.

 - It is a superglobal variable.


/// type=SS, answer=[5]

On line 4, what does `isset($_COOKIE['user'])` do?

 - It creates the `user` cookie.

 - It deletes the `user` cookie.

 - It displays the `user` cookie.

 - It defines the `user` cookie.
 
 - It checks whether the `user` cookie is set or not.


/// type=SS, answer=[5]

On lines 4 and 5, what does `$_COOKIE['user']` do?

 - It checks the value of the `user` cookie.

 - It creates the value of the `user` cookie.

 - It deletes the value of the `user` cookie.

 - It displays the value of the `user` cookie.

 - It accesses the value of the `user` cookie.
 

/// type=MS, answer=[1,2,3]

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
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `my_cookie`.

 - It produces an error.

 - No output is displayed.

 - It prints `Sorry, a cookie is not found!`.

 - It prints `Cookie Value: This is my cookie.`.


/// type=SS, answer=[5]

Reload the program. What is its output?

 - It prints `my_cookie`.

 - It produces an error.

 - No output is displayed.

 - It prints `Sorry, a cookie is not found!`.

 - It prints `Cookie Value: This is my cookie.`.


/// type=MS answer=[1,4]

Which of the following are functions?

 - `isset()`

 - `$expiry`

 - `$_COOKIE`

 - `setcookie()`

 - `$cookieValue`


/// type=SS, answer=[2]

Which of the following is a superglobal variable?

 - `$expiry`

 - `$_COOKIE`

 - `setcookie()`

 - `$cookieName`

 - `$cookieValue`


/// type=SS, answer=[2]

On line 6, what does the `setcookie()` function do?

 - It checks if the `my_cookie` cookie with the value `This is my cookie.` is set in `60` seconds.

 - It creates the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.

 - It deletes the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.

 - It displays the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.

 - It accesses the `my_cookie` cookie with the value `This is my cookie.` that expires in `60` seconds.


/// type=SS, answer=[1]

On line 6, what does the argument `$cookieName` represent? 

 - The name of the cookie.

 - The value of the cookie.

 - The expiry time of the cookie.

 - The server path of the cookie.

 - The domain name of the cookie. 


/// type=SS, answer=[5]

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
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, answer=[5]

Reload the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, answer=[4]

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
/// type=MS, answer=[2,5]

Why is there no output displayed after replacing `time() + 60` with `time() - 3600`?

 - There is no cookie named `user` that is set in the program.

 - `time() - 3600` sets the `user` cookie expiration time to one hour ago.

 - The `user` cookie is not yet defined during the execution of the program.

 - The statement `setcookie("user", "My Cookie", time() - 3600);` is invalid.

 - Setting the expiration time to `time() - 3600` deletes the `user` cookie stored in the user's computer.


/// type=SS, answer=[5]

In the statement `setcookie("user", "My Cookie", time() - 3600);` on line 2, what does `time() - 3600` do?

 - It removes the expiration time of the `user` cookie.

 - It accesses the expiration time of the `user` cookie.

 - It sets the expiration time of the `user` cookie to one hour.

 - It sets the expiration time of the `user` cookie to `60` seconds.

 - It sets the expiration time of the `user` cookie to one hour ago.


/// type=SS, answer=[2]

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

/// type=MS, answer=[3,4]

Which statements are true about a cookie?

 - It accesses a cookie value.

 - It creates and deletes cookies in PHP.

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes. 

 - It sends a URL encoded cookie together with the rest of the HTTP headers.


/// type=MS, answer=[2,5]

Which statements correctly describe the `setcookie()` function?

 - It accesses a cookie value.

 - It creates and deletes cookies in PHP.

 - It is a small amount of information stored on the user's computer.

 - It is used for application state tracking and identification purposes. 

 - It sends a URL encoded cookie together with the rest of the HTTP headers.


/// type=MS, answer=[2,3,4,5]

Which of the following are `setcookie()` parameters?

 - `URL`

 - `name`

 - `value`

 - `domain`

 - `expires`


/// type=SS, answer=[1]

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
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `user`.

 - It produces an error.

 - It prints `My Cookie`.

 - No output is displayed.

 - It prints `The cookie value is: My Cookie`.


/// type=SS, answer=[4]

What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, answer=[4,5]

Which statements correctly describe the error?

 - There is no open parenthesis `(` after `setcookie` on line 2.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is an addition operator `+` specified between `time()` and `60` on line 2.

 - There is no comma `,` specified between `"My Cookie"` and `time() + 60` on line 2.

 - On line 2, the statement `setcookie("user", "My Cookie" time() + 60);` is invalid.

:::


/// type=CR, answer=[tests/Cookies/MissingCommaBetweenArgumentTest.php]

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
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, answer=[1,2]

Which statements correctly describe the error?

 - There is no open square bracket `[` after `$_COOKIE` on line 5.

 - On line 5, `$_COOKIE'user']` in the `echo` statement is invalid.

 - There is no semicolon `;` at the end of the statement on line 2.

 - There is no addition operator `+` specified between `time()` and `60` on line 2.

 - There is no open curly brace `{` after `if (isset($_COOKIE['user']))` on line 4.

:::


/// type=CR, answer=[tests/Cookies/MissingSquareBracketTest.php]

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
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, answer=[1,3]

Which statements correctly describe the error?

 - On line 4, the statement `$expiry = time()  60;` is invalid.

 - There is no semicolon `;` at the end of the statement on line 3.

 - There is no addition operator `+` specified between `time()` and `60` on line 4.

 - On line 6, the argument `$cookieValue` is not enclosed in double quotes `""`.

 - There is no comma `,` specified between `$cookieValue` and `$expiry` on line 6.

:::


/// type=CR, answer=[tests/Cookies/MissingPlusSignOnExpiryTest.php]

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
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - There is no open curly brace `{` after `if(!isset($_COOKIE[]))` on line 15.

 - There is an exclamation symbol `!` before the `isset()` function call on line 15.

 - On line 15, the `isset($_COOKIE[])` function call in the `if` construct is invalid.

 - There is no argument specified in the `$_COOKIE[]` superglobal variable on line 15.

 - On line 15, the `$_COOKIE[]` superglobal variable is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/Cookies/MissingArgumentOnSuperglobalCookieTest.php]

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
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Fatal error: Cannot use `[]` for reading on line number 15

 - Warning: Cookie names must not be empty on line number 6

 - syntax error, unexpected `'60'` (T_LNUMBER) on line number 4

 - syntax error, unexpected `'time'` (T_STRING), expecting `','` or `')'` on line number 2

 - syntax error, unexpected `''user''` (T_CONSTANT_ENCAPSED_STRING), expecting `','` or `';'` on line number 5


/// type=MS, answer=[1,2,5]

Which statements correctly describe the error?

 - The first argument `""` in the `setcookie()` function is not allowed.

 - There is no cookie name specified in the `setcookie()` function on line 6.

 - On line 6, the argument `$cookieValue` is not enclosed in double quotes `""`.

 - There is no comma `,` specified between `$cookieValue` and `$expiry` on line 6.

 - On line 6, the statement `setcookie("", $cookieValue, $expiry);` is invalid.

:::


/// type=CR, answer=[tests/Cookies/MissingCookieNameArgumentOnSetCookieTest.php]

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

/// type=CR, answer=[tests/Cookies/CreateCookieWithSetCookieTest.php]

Write a program that uses `setcookie()` and `$_COOKIE` to create and access cookies. First, use the `setcookie()` function that passes the arguments `test_cookie`, `This is a test cookie.`, and `time + 360` respectively. Next, add an `if` statement that uses `isset()` and `$_COOKIE` to evaluate whether the `test_cookie` cookie is set or not. Inside the `if` block, add the statement `echo "Cookie Value: " . $_COOKIE[test_cookie];`. Then, run the program to view the output.

```php
<?php


?>
```

+++
