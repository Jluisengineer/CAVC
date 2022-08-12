<?php

// ---- Creamos la clase conexion
class Conexion{
    //declarando la variable conexion
    protected $conexion;
// ---- declarando el constructor. 
    public function __construct(){
        try{
            $this->conexion = new PDO('mysql:host=localhost; dbname=mybank','root','');
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ----- Fijando los caracteres. Tiene que ir en mayusculas        
            $this->conexion->exec("SET CHARACTER SET utf8");

            return $this->conexion;

        } catch(Exception $e){
            die('Error: '.$e -> GetMessage());
        } finally{
            $conexion = null;
        }
    }
}

?>