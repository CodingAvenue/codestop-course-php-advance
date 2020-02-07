### Facts for Cookies lesson:

A cookie is a small amount of information stored on the user's computer for application state tracking and identification purposes.

The `setcookie()` function creates and deletes cookies in PHP. It sends a URL encoded cookie together with the rest of the HTTP headers.

It has the following parameters:

 - `name` specifies the name of a cookie.

 - `value` specifies the value of a cookie.

 - `expires` indicates the expiry time of a cookie.

 - `path` indicates the server path of a cookie.

 - `domain` indicates the domain name of a cookie.

 - `secure` specifies the secure HTTPS connection where a cookie should be transmitted from the client. 

The `$_COOKIE` superglobal variable accesses a cookie value.

The example below displays the string `Sorry, a cookie is not found!` in the browser window when you execute the program for the first time. It displays the string `Cookie Value: Anna` when you click the refresh button of the browser.

Code:

```php
<?php  
setcookie("user", "Anna", time() + 60);  
?>

<html>
    <head>
        <title>Creating and Accessing Cookie</title>
    </head>
    <body>  
        <?php  
            if(!isset($_COOKIE["user"])) {  
                echo "Sorry, a cookie is not found!";  
            } else {  
                echo "<br/>Cookie Value: " . $_COOKIE["user"];  
            }  
        ?>  
    </body>  
</html>
```

In the example above, the code breaks down as follows:

 - `setcookie("user", "Anna", time() + 60);` defines a cookie named `user` with the value `Anna` that expires in `60` seconds.

 - `$_COOKIE["user"]` accesses the value of a cookie named `user`.

 - `isset($_COOKIE["user"])` checks the `user` cookie if it is set.

 - `if(!isset($_COOKIE["user"])) {...}` evaluates the `user` cookie if it is set or not.
