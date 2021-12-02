<?php
include "conexion.php";
session_start();
$codigo = $_SESSION['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];



$sql = "UPDATE usuario SET nombre = '$nombre', apellido ='$apellido', correo = '$correo' WHERE id_usuario = '$codigo'";

$query=mysqli_query($conexion,$sql);

if($query)
{
    header("Location: ../Perfil.php");
}


?>
