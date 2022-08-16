<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - Delete Customers</title>
    <link rel="icon" href="img/icon-gold.png">
    <link rel="stylesheet" href="styles/style_table.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Bebas+Neue');

    </style>
</head>
<body>
    <?php
    require_once("Bank_Management.php");
    $customer = new Bank_Management();
    $id=$_GET['Id'];
    $delete = $customer -> delete_customer($id);
    if($delete){
        echo "Customer has been removed";
    } else{
        echo "Something went wrong";
    }    
    ?>

    <div>
        <a href='Employee.php'><input type='button' value='Home'></a>
    </div>
    
</body>
</html>