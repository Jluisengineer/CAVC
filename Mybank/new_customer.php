<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - New Customer</title>
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
        <h1 style="font-size: 50pt;">MyBank Customer Management: New customer</h1>
    </div>
    <div id="form" style="margin-top:100px">
    <form action="new_customer1.php" method="POST">
        <table id="register">
            <tr><td><label>Name:</label></td><td><input type="text" name="name" id="name" placeholder="Name" required></td></tr>
            <tr><td><label>Surname:</label></td><td><input type="text" name="surname" id="surname" placeholder="Surname" required></td></tr>
            <tr><td><label>Address:</label></td><td><input type="text" name="address" id="address" placeholder="Address" required></td></tr>
            <tr><td><label>Phone:</label></td><td><input type="text" name="phone" id="phone" placeholder="Phone" required></td></tr>
            <tr><td><label>email:</label></td><td><input type="text" name="email" id="email" placeholder="Email@email" required></td></tr>
            <tr><td><input type="submit" value="Add"></td><td><a href="2_Employee.php"><input type="button" id="return" value="Home"></a></td></tr>
        </table>
        
    </form>
    </div>

    
</body>
</html>