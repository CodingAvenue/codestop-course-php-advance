<?php
setcookie("user", "My Cookie", time() + 60);

if (isset($_COOKIE['user'])) {
    echo "The cookie value is: " . $_COOKIE['user'];
}
?>