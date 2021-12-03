<?php
include "includes/conexion.php";
$id = $_GET['id'];

$sql = "SELECT * from usuario where id_usuario = '$id'";
$result = $conexion->query($sql);

$row = $result->fetch_assoc();
$estado=$row["id_estado_usuario"];
if($estado==1){
    $estado=2;
}
else{
    $estado=1;
}

$sql = "UPDATE usuario SET id_estado_usuario='$estado' WHERE id_usuario= '$id'";

if ($conexion->query($sql) === TRUE)
{
    header("location: DashboardGusuarios.php#");

}
else {
    echo($sql);
}
