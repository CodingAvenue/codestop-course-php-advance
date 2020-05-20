<?php
session_start();
session_id("test-session-123");

$_SESSION["firstName"] = "John";
$_SESSION["lastName"] = "Miller";

echo session_id() . ' ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
?>