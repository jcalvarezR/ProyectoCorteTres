<?php
include "conexion.php";

$codigo = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

$sql = "UPDATE usuario SET nombre = '$nombre',apellido ='$apellido',correo = '$correo' WHERE id_usuario = '$codigo'";

$query=mysqli_query($conexion,$sql);

if($query)
{
    header("Location: frontend/Perfil.html");
}


?>
