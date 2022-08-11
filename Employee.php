<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            session_start();

            if(!isset($_SESSION["user_1"])){
                header("location:2. Login.html");
            }
    //echo "<h2> Welcome ".$_SESSION["user_1"]."</h2>";
    echo "Bienvenido ". $_SESSION["user_1"] ."<br><br>";
    ?>
</body>
</html>