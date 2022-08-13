<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - List of Customers</title>
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
            header("location:0_index.html");
        }
        echo "<h3> Manager: ".$_SESSION["user_1"]."</h3>";
?>

<div>
        <h1 style="font-size: 25pt;">MyBank Customer Management: List of Customers</h1>
</div>

<div>
    <?php
        require_once("Bank_Management.php");
        $list = new Bank_Management();

        if(isset($_GET['pagina'])){
    
            if($_GET['pagina']==1){
                header("Location:list_customers.php");      
            } else{
                $page=$_GET['pagina'];
            }
        } else {
            $page = 1;
        }

        $size = 20;
        $start = ($page-1)*$size;

        $numrows = $list -> number_customers();
        $total_pages = ceil($numrows / $size);

        $row = $list -> list_customers($start,$size);
    

    ?>
    <table width=75% border='0' align='center'>
        <tr><th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th class="address">Address</th>
        <th>Phone</th>
        <th>email</th>
        </tr>  
        
        
        <?php
        while($customer = $row->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>".$customer['c_id']."</td>";
            $id=$customer['c_id'];
            $name = $customer['c_name'];
            $surname= $customer['c_surname'];
            $address= $customer['c_address'];
            $phone= $customer['c_phone'];
            $email= $customer['c_email'];
            echo "<td>".$customer['c_name']."</td>";
            echo "<td>".$customer['c_surname']."</td>";
            echo "<td>".$customer['c_address']."</td>";
            echo "<td>".$customer['c_phone']."</td>";
            echo "<td>".$customer['c_email']."</td>";
            echo "<td class='bot'><a href='update_customer.php?Id=$id&name=$name&surname=$surname&address=$address&phone=$phone&email=$email'><input type='button' value='Update'></a>";
            echo "<td class='bot'><a href='delete_customer.php?Id=$id'><input type='button' value='Delete'></a>";
            echo "<td class='bot'><a href='new_transaction.php?Id=$id'><input type='button' value='Add Transaction'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>

</div>

<div id="pages">
    <?php
        // ----------------------- Making buttons -----------------
        for($i = 1; $i<=$total_pages; $i++){
            echo "<a href='?pagina=$i'><input type='button' name='pag' id='pag' value='Page ".$i."'></a>";
        }
        echo "<a href=2_Employee.php><input type='button' value='Home'></a>";
    ?>
</div>



</body>
</html>