<?php
session_start();
 
$_SESSION["name"] = "Diana";

echo 'Welcome, ' . $_SESSION["name"] . '!';
?>