<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once("Bank_Management.php");
$customer = new Bank_Management();
$id=$_POST['Id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=htmlentities(addslashes($_POST['email']));

$result=$customer->update_customer($id,$name,$surname,$address,$phone,$email);

if($result){
    echo "Register updated";
}
?>

<a href='2_Employee.php'><input type='button' value='Home'></a>
</body>
</html>