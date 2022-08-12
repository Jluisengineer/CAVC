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
    echo "<table id='search'>
    <tr><th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Address</th>
    <th>Phone</th>
    <th>email</th>
    </tr>";  
        
        
    
    while($customer = $row->fetch(PDO::FETCH_ASSOC)){
        echo "
        <tr><td>".$customer['c_id']."</td>
        <td>".$customer['c_name']."</td>
        <td>".$customer['c_surname']."</td>
        <td>".$customer['c_address']."</td>
        <td>".$customer['c_phone']."</td>
        <td>".$customer['c_email']."</td>
        <td ><a><input type='button' value='Update'></a>
        <td ><a><input type='button' value='Delete'></a>
        <td ><a><input type='button' value='Add Transaction'></a></td>

        </tr>
        
        
        </table>";
        
        
        
        
    }
    ?>
    <div style="text-align: center; margin-top:25px;"><a href="2_Employee.php"><input type="button" value = "Home"></a><div>
</body>
</html>