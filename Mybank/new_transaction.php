<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - New Transaction</title>
    <link rel="icon" href="img/icon-gold.png">
      
    <style>
        body{
            background-color: #ccebfd;
        }
        h1{
            text-align: center;
            font-size: 30pt;
        }
        table td{
            text-align:center;
            border:1px #000099 dotted;
            width:10cm
        }
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
        <h1 style="font-size: 25pt;">MyBank Customer Management: New Transaction</h1>
</div>
<div>
    <?php    
    require_once("Bank_Management.php");
    $transaction = new Bank_Management();

    if(isset($_GET['Id'])){
        $id=$_GET['Id'];
        $row = $transaction->select_transaction($id);

        echo "<table width=30%>";
        while($customer = $row->fetch(PDO::FETCH_ASSOC)){
           
            echo "<tr><td class='tra'>".$customer['c_name']."</td>";
            echo "<td class='tra'>".$customer['c_surname']."</td>";
            echo "<td class='tra'>".$customer['ac_number']."</td>";
            echo "<td class='tra'>".$customer['ac_sortcode']."</td></tr>";
        }  
      
    } else{?>
        <div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label>Name:</label><input type="text" name="name" id="name" placeholder="Name" >
            <label>Surname:</label><input type="text" name="surname" id="surname" placeholder="Surname">
            <input type="submit" value="Search">    
        </form>
        <?php
            if(isset($_POST['name']) or isset($_POST['surname'])){
                
                $row=$transaction->select_transaction(0,$_POST['name'],$_POST['surname']);
                echo "<table width=30%>"; 
                while($customer = $row->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr><td class='tra'>".$customer['c_name']."</td>";
                    echo "<td class='tra'>".$customer['c_surname']."</td>";
                    echo "<td class='tra'>".$customer['ac_number']."</td>";
                    echo "<td class='tra'>".$customer['ac_sortcode']."</td></tr>";

                }
                echo"</table>";
            }

        ?>
        </div>
    <?php
    }
    ?>
</div>
<div>
    <form action='new_transaction1.php' method="POST">
    <table align="center" width='65%'>
        <tr><th class='tra'>Account Number</th><th class='tra'>Sort Code</th><th class='tra'>Reference</th><th class='tra'>in</th> <th class='tra'>Out</th></tr>
        <tr><td class='tra'><input type="text" name="ac_num" id="ac_num"></td>
        <td class='tra'><input type="text" name="s_code" id="s_code"></td>
        <td class='tra'><input type="text" name="refer" id="refer"></td>
        <td class='tra' ><input type="text" name="in" id="in" value=0></td>
        <td class='tra'><input type="text" name="out" id="out" value=0></td></tr>
        <tr ><td class="bot"><input type="submit" value="Send"></td> <td class="bot"><a href="Employee.php"><input type="button" value="Home"></a></td></tr>
    </table>
    </form>
</div>
</body>
</html>