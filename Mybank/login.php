<?php
require_once("Bank_Management.php");
$user = htmlentities(addslashes($_POST["user_login"]));
$password = htmlentities(addslashes($_POST["password_login"]));
$newLogin = new Bank_Management();
$newLogin->login($user,$password);
?>