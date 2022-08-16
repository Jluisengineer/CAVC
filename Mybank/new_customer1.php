<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - New Customer</title>
    <link rel="icon" href="img/icon-gold.png">
    <link rel="stylesheet" href="styles/style_employee_area.css">
</head>
<body>
<?php
require_once("Bank_Management.php");
$name = $_POST["name"];
$surname = $_POST["surname"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$newCustomer = new Bank_Management();
$newCustomer->register_customer($name,$surname,$address,$phone,$email);

?>
<a href="Employee.php"><input type="button" value="Home"></a>
</body>
</html>

