<?php
include "conexion.php";

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

$sql = "UPDATE datos SET nombre = '$nombre',apellido ='$apellido',correo = '$correo' WHERE codigo = '$codigo'";

$query=mysqli_query($conexion,$sql);

if($query)
{
    header("Location: Perfil.html");
}

