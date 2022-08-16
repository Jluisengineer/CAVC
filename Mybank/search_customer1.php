<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - Search Customer</title>
    <link rel="icon" href="img/icon-gold.png">
    <link rel="stylesheet" href="styles/style_employee_area.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Bebas+Neue');

    </style>
</head>
<body>
<?php
        session_start();

        if(!isset($_SESSION["user_1"])){
            header("location:0_index.html");
        }
        echo "<h3> Manager: ".$_SESSION["user_1"]."</h3>";
?>

<div>
        <h1 style="font-size: 50pt;">MyBank Customer Management: Search Customer</h1>
</div>
<?php
    require_once("Bank_Management.php");
    $name=$_POST["name"];
    $surname=$_POST['surname'];
    $search = new Bank_Management();
    $row = $search->search_customer($name,$surname);
    echo "<table id='search'>";
    echo "<tr><th>Id</th><th>Name</th><th>Surname</th><th>Address</th><th>Phone</th><th>email</th></tr>";  
        
        
    
    while($customer = $row->fetch(PDO::FETCH_ASSOC)){
        $id = $customer['c_id'];
        $name = $customer['c_name'];
        $surname = $customer['c_surname'];
        $address = $customer['c_address'];
        $phone = $customer['c_phone'];
        $email = $customer['c_email'];
        echo "<tr><td>".$customer['c_id']."</td>";
        echo "<td>".$customer['c_name']."</td>";
        echo "<td>".$customer['c_surname']."</td>";
        echo "<td>".$customer['c_address']."</td>";
        echo "<td>".$customer['c_phone']."</td>";
        echo "<td>".$customer['c_email']."</td>";
        echo "<td><a href='update_customer.php?Id=$id&name=$name&surname=$surname&address=$address&phone=$phone&email=$email'><input type='button' value='Update'></a>";
        echo "<td><a href='delete_customer.php?Id=$id'><input type='button' value='Delete'></a>";
        echo "<td><a a href='new_transaction.php?Id=$id'><input type='button' value='Add Transaction'></a></td>";
        echo "<td><a a href='more_info.php?Id=$id'><input type='button' value='More info'></a></td></tr>";
    }
    echo "</table>";
    ?>
    <div style="text-align: center; margin-top:25px;"><a href="Employee.php"><input type="button" value = "Home"></a><div>
</body>
</html>