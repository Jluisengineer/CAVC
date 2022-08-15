<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Transaction</title>
</head>
<body>
<?php
require_once("Bank_Management.php");
$customer = new Bank_Management();
$s_code=$_POST['s_code'];
$refer=$_POST['refer'];
$in=$_POST['in'];
$out=$_POST['out'];


$result=$customer->transaction($refer,$s_code,$in,$out);

if($result){
    echo "Register updated";
}
?>

<a href='2_Employee.php'><input type='button' value='Home'></a>
</body>
</html>