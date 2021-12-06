<?php
include "includes/conexion.php";
$id = $_GET['id'];

$sql = "SELECT * from copia where id_copia = '$id'";
$result = $conexion->query($sql);

$row = $result->fetch_assoc();
$estado=$row["id_estado_copia"];
if($estado==1){
    $estado=2;
}
else{
    $estado=1;
}

$sql = "UPDATE copia SET id_estado_copia='$estado' WHERE id_copia= '$id'";

if ($conexion->query($sql) === TRUE)
{
    header("location: DashboardGcopias.php#");

}
else {
    echo($sql);
}


  