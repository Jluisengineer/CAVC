<?php
// In this file, I create a new class with its methods

require_once("conexion_DDBB/conexion.php");

class Bank_Management extends Conexion{
    public function __construct(){
        parent::__construct();
    }

    public function login($user,$password){
        $sql = "select e_user,e_name, e_password from employee where e_user= :m_user and e_password = :m_passw";
        $result = $this->conexion -> prepare($sql);
        $result -> bindValue(":m_user",$user);
        $result -> bindValue(":m_passw",$password);
        $result -> execute();
        $record = $result -> rowCount();
        if($record != 0){
            session_start();
            
            $record = $result ->fetch(PDO::FETCH_ASSOC);
            $result -> closeCursor(); 
            $_SESSION["user_1"] = $record["e_name"];
            //echo $_SESSION["user_1"]; 
            header("location:Employee.php");
        } else{
            $result -> closeCursor(); 
            header("location:index.html");
        }
    }

    public function register_customer($name,$surname,$address,$phone,$email){
        $sql = "insert into customers(c_name,c_surname,c_address,c_phone,c_email) values(:m_name,:m_surname,:m_address,:m_phone,:m_email)";
        $result = $this->conexion -> prepare($sql);
        $result -> bindValue(":m_name",$name);
        $result -> bindValue(":m_surname",$surname);
        $result -> bindValue(":m_address",$address);
        $result -> bindValue(":m_phone",$phone);
        $result -> bindValue(":m_email",$email);
        $result -> execute();
        if($result){
            echo"Customer Registered";
        } else{
          echo "Something went worng!";  
        }
    }

    public function search_customer($name,$surname){
        $sql = "select * from customers where c_name= :m_name or c_surname= :m_surname";
        $result = $this->conexion -> prepare($sql);
        $result -> bindValue(":m_name",$name);
        $result -> bindValue(":m_surname",$surname);
        $result -> execute();
        return $result;
    }
    public function list_customers($start,$size){
        $sql = "select * from customers limit $start,$size";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result;
    }
    public function number_customers(){
        $sql = "select * from customers";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result->rowCount();
    }
    public function select_transaction($id=0,$name="",$surname=""){
        $sql = "select c_id, c_name, c_surname, ac_number, ac_sortcode from customers inner join accounts on c_id=ac_c_id where c_id = $id  or c_name='$name' or c_surname='$surname'";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result;
    }

    public function delete_customer($id){
        $sql = "delete from customers where c_id=$id";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result;
    }

    public function update_customer($id,$name,$surname,$address,$phone,$email){
        $sql = "update customers set c_name='$name', c_surname ='$surname', c_address='$address', c_phone='$phone', c_email='$email' where c_id=$id";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result;
    }

    public function transaction($refer,$s_code,$in,$out){
        $sql="insert into transactions(tr_reference, tr_ac_sortcode, tr_in, tr_out) values('$refer','$s_code','$in','$out')";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result;
    }

    public function balance($id){
        $sql="select c_id, c_name, c_surname, tr_ac_sortcode, SUM(tr_in-tr_out) as Balance from ((customers inner join accounts on c_id=ac_c_id) inner join transactions on ac_sortcode = tr_ac_sortcode) where c_id=$id group by tr_ac_sortcode";
        $result = $this->conexion -> prepare($sql);
        $result -> execute();
        return $result;
    }

}

?>