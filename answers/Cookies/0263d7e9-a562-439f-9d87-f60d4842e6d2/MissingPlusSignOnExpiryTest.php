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