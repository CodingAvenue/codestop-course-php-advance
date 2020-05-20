<?php
setcookie("test_cookie", "This is a test cookie.", time() + 360);

if (isset($_COOKIE['test_cookie'])) {
    echo "Cookie Value: " . $_COOKIE['test_cookie'];
}
?>