<?php

// ---- Creating Conexion class
class Conexion{
    
    protected $conexion;
// ---- initialing the constructor. 
    public function __construct(){
        try{
            $this->conexion = new PDO('mysql:host=localhost; dbname=mybank','root','');
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
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