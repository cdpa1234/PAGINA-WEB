<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "registro_usuarios_bd";

$conexion = mysqli_connect($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("conexion a fallado". $conexion->connect_errno);   
}

else
{
 echo "conectado a la db";
}


?>