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
<div>

</div>
    <div id="form" style="margin-top:100px">
    <form  action="search_customer1.php" method="POST">
        <table id="register">
            <tr><td><label>Name:</label></td><td><input type="text" name="name" id="name" placeholder="Name" ></td></tr>
            <tr><td><label>Surname:</label></td><td><input type="text" name="surname" id="surname" placeholder="Surname" ></td></tr>
            
            <tr><td><input type="submit" value="Search"></td><td><a href="Employee.php"><input type="button" id="return" value="Home"></a></td></tr>
        </table>
        
    </form>
    </div> 


</body>
</html>