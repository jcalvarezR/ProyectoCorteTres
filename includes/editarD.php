<?php
include "conexion.php";
session_start();
$id_documento = $_SESSION['id_documento'];
$id_editorial = $_POST['id_editorial'];
$nombreD = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fecha_p = $_POST['fecha_publicacion'];



$sql = "UPDATE documento SET id_editorial = '$id_editorial', nombre = '$nombreD', descripcion ='$descripcion', fecha_publicacion = '$fecha_p' WHERE id_documento = '$id_documento'";

$query=mysqli_query($conexion,$sql);

if($query)
{
    header("Location: ../DashboardUsuario.php");
}else{

    echo($sql);
}



?>
