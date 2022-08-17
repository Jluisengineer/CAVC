<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon-gold.png">
    <link rel="stylesheet" href="styles/style_table.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Bebas+Neue');

    </style>
</head>
<body>
<?php
        session_start();

        if(!isset($_SESSION["user_1"])){
            header("location:index.html");
        }
        echo "<h3> Manager: ".$_SESSION["user_1"]."</h3>";
?>

<div>
        <h1 style="font-size: 25pt;">MyBank Customer Management:Update Customers</h1>
</div>

<?php
require_once("Bank_Management.php");
$customer = new Bank_Management();
$id=$_GET['Id'];
$name=$_GET['name'];
$surname=$_GET['surname'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$email=$_GET['email'];
?>
<form method='POST' action='update_customer1.php'>
<table align="center" width='40%'>
<tr><td colespan='2'><label for="name">ID:</laberl></td><td><input type='text' name="Id" id="Id" value='<?php echo $id?>' readonly="readonly"></td></tr>
<tr><td><label for="name">Name:</laberl></td><td><label><?php echo $name?></laberl></td><td><input type="text" name="name" id="name" value="<?php echo $name ?>"></td></tr>
<tr><td><label for="surname">Surname:</laberl></td><td><label><?php echo $surname?></laberl></td><td><input type="text" name="surname" id="surname" value="<?php echo $surname ?>"></td></tr>
<tr><td><label for="address">Address</laberl></td><td><label><?php echo $address?></laberl></td><td><input type="text" name="address" id="address" value="<?php echo $address ?>"></td></tr>
<tr><td><label for="phone">Phone</laberl></td><td><label><?php echo $phone?></laberl></td><td><input type="text" name="phone" id="phone" value="<?php echo $phone ?>"></td></tr>
<tr><td><label for="email">Email</laberl></td><td><label><?php echo $email?></laberl></td><td><input type="text" name="email" id="email" value="<?php echo $email ?>"></td></tr>
<tr><td><input type='submit' id="send" value="Send"></td><td><a href='Employee.php'><input type='button' value='Home'></a></td></tr>
</table>

</form>

</body>
</html>
