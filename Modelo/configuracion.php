<?php
    class Conexion
    {
        
private $servername = "localhost";
private $username = "root";
private $password = "";
protected $conexion; 

public function __CONSTRUCT(){
try{
    $this->conexion = new PDO("mysql:host=$this->servername;dbname=jornan2", $this->username, $this->password);
    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}catch(PDOException $e){
    die($e->getMessage());
}

}


    }
?>