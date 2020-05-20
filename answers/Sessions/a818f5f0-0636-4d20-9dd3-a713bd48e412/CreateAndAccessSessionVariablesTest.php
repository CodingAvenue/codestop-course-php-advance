<?php
session_start();
session_id("practice-session-101");

$_SESSION["name"] = "James";
$_SESSION["password"] = "123-pass";

echo session_id() . ' ' . $_SESSION["name"];
?>