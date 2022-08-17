<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - More info</title>
    <link rel="icon" href="img/icon-gold.png">
    <link rel="stylesheet" href="styles/style_employee_area.css">
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION["user_1"])){
            header("location:index.html");
        }
        echo "<h3> Manager: ".$_SESSION["user_1"]."</h3>";
    ?>
    
    <?php
    require_once("Bank_Management.php");
    $id=$_GET["Id"];
    $customer = new Bank_Management();
    $row = $customer->balance($id);

    echo "<table id='search'>";
    echo "<tr><th>Id</th><th>Name</th><th>Surname</th><th>Sortcode</th><th>Balance</th></tr>";  
        
        
    
    while($customer = $row->fetch(PDO::FETCH_ASSOC)){
  
        echo "<tr><td>".$customer['c_id']."</td>";
        echo "<td>".$customer['c_name']."</td>";
        echo "<td>".$customer['c_surname']."</td>";
        echo "<td>".$customer['tr_ac_sortcode']."</td>";
        echo "<td>".$customer['Balance']."</td></tr>";
    }
    echo "</table>";
    ?>
    <div style="text-align: center; margin-top:25px;"><a href="Employee.php"><input type="button" value = "Home"></a><div>



</body>
</html>