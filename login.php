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
    $user= $_POST['user_login']; //passing name
    $password= $_POST['passqord_login'];

    $conexion = new mysqli("localhost","root","","mybank");

    if (mysqli_connect_errno()){
        echo "Impossible to conect with the database";
        exit ();
    }

    mysqli_select_db($conexion,"mybank") or die ("Database couldn't be found");

    mysqli_set_charset($conexion,"UTF-8");


    $sql = "select * from employee where e_user = 'John12'"; //En esta variable escribimos en SQL la consulta que queremos hacer.
    $resultado = mysqli_query($conexion,$sql); // en la variable resultado nos saca la tabla entera. 
  
    $row = mysqli_fetch_row($resultado); // en una variable fila, pasamos la tabla fila por fila con mysqli_fetch_row. Cada fila es un array de elementos.
    
    if(count($row)==0){"No hay resultados";} else{"1";}
    
    echo "<br>";
    while($row = mysqli_fetch_row($resultado)){ // Mientras haya datos se almacenan en row.
        for ($i=0; $i < count($row); $i++){
              echo $row[$i]." / ";
        }  
        echo "<br>";      
 }
 


//if($user = and $password)

//header("Location:Employee.html");
?>
</body>
</html>



