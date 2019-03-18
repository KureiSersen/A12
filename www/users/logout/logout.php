<meta name="content-type"; charset="UTF-8">
<?php
session_start();
$_SESSION = array();
unset($_COOKIE['cookiePassword']);
unset($_COOKIE['cookieEmail']);
header("location:../login/login_.php");
?>
