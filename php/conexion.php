<?php
$host = "localhost";
$username= "root";
$password= "";
$dbname= "registrados";

// conexioncon la BD
$conexion= new mysqli($localhost,$username,$password,$dbname);
//comprobar conexion
if($conexion->connect_error){
   die("conexion fallida:".$conexion->connect_error);
}else{
  echo "conexion exitosa.";
}

?>