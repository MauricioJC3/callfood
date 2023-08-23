<?php
   include("conexion.php");//incluyo a la BD
$mensaje="";

//primero verificamos si se dio un POST
if($_POST){
   //verificar las validaciones de los campos
   $usuario=$_POST['usuario'];
   $clave=$_POST['clave'];
   $perfil="";
   $estado="";
   //comprobemos que se han llenado los campos usuario y clave
   if(empty($usuario) || empty($clave)){
    echo "<script>alert('por favor ingrese el usuario y/o contraseña')</script>";
    echo "<script>window.location.href = '../Login/login.html';</script>";
   }else{
    $sql="SELECT usuario,clave,perfil,estado FROM usuarios WHERE usuario='$usuario AND clave= '$clave' ";
    $resultado= mysqli_query($conexion,$sql);//ejecuta consultas
    $count= mysqli_num_rows($resultado); //hay filas
    if($coubt>0){
      $arrylogin = msqli_fetch_object($resultado);
      //(opcional) comprobar el estado
      $_SESSION['login_user'] = $_POST['usuario'];
       if($arraylogin->perfil == "admin")(
         header("location: bienvenido_admin.html");
       )
       if($arraylogin->perfil == "user")(
         header("location: bienvenida_usuario.html");
       )
          }else{
            $mensaje= "usuario y/o contraseña incorrecta";
            echo "<script>LERT('$mensaje');</script";
            echo "<script>window.location.href = '../Login/login.html';</script>";
            $conexion->close();
          }
   }

}else{

}
?>