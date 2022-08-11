<!doctype html>
<html>
<head>
    <title> database </title>
    <meta charset="UTF-8">

</head>
<body>
<?php
        //require_once
    // ---- htmlentities — Convert all applicable characters to HTML entities
    // ---- addslashes — Quote string with slashes
        $user = htmlentities(addslashes($_POST["user_login"]));
        $password = htmlentities(addslashes($_POST["password_login"]));
        
        try{
    // ---- class PDO
            $conexion = new PDO('mysql:host=localhost; dbname=mybank','root','');
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // -----  Set characteres.        
            $conexion -> exec("SET CHARACTER SET utf8");
            
            
    // ---- query.
            $sql = "select e_user, e_password from employee where e_user= :m_user and e_password = :m_passw"; 
        
    // ---- Prepare the query.
            $result = $conexion -> prepare($sql);
            

        // ---- PDOStatement::bindValue — Binds a value to a parameter --> :marcador
            

            $result -> bindValue(":m_user",$user);
            $result -> bindValue(":m_passw",$password);

    // ---- Execute query.
            $result -> execute();
            if($result){echo" resultado ok";}

    // ---- I need to know if the user exists in my database.
            // ---- PDOStatement::rowCount — Returns the number of rows affected by the last SQL statement

            $record = $result -> rowCount();

        // ---- If the record exists.
        
            if($record != 0){

        // ---- Iniciando una sesion. Si el usuario existe en la base de datos me creas la session.
                // ---- session_start — new session 
                session_start();

                
                $_SESSION["user_1"] = $_POST["user_login"]; 

                header("location:Employee.php");

            } else{
                header("location:index.html");
            }


        } catch(Exception $e){
            die('Error: '.$e -> GetMessage());
        } finally{
            $conexion = null;
        }

?>
</body>
</html>



