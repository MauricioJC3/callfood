<?php
 require_once 'conexion.php';
 if($_POST)
 {
    $perfil= 'user';
    $nombre= $_POST['name'];
    $genero= $_POST['gender'];
    $correo= $_POST['email'];
    $telefono= $_POST['phone'];
    $contraseña= $_POST['clave'];
    
   
    $sql= "INSERT INTO usuarios VALUES (null,'$nombre', '$genero', '$correo', '$telefono', '$contraseña')";

    if($conexion->query($sql)===true)
    {
     echo "<script>alert('registro exitoso');</script>";
     echo "<script>window.location.href='../index.html';</script>";

    }
    else
    {
     // echo "error".$sql.''.$conexion->connect_error;

    }
    }
    else{
        echo"conexion fallida".$conexion->connect_error;
    }
    $conexion->close();
?>