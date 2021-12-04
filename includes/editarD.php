<?php
include "conexion.php";
session_start();
$id_usuario = $_SESSION['id'];
$id_editorial = $_POST['editorial'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fecha_p = $_POST['fecha_publacion'];



$sql = "UPDATE documento SET id_editorial = '$id_editorial', nombre = '$nombre', descripcion ='$descripcion', fecha_publiacion = '$fecha_p' WHERE id_usuario = '$id_usuario'";

$query=mysqli_query($conexion,$sql);

if($query)
{
    header("Location: ../DashboardUsuario.php");
}


?>
