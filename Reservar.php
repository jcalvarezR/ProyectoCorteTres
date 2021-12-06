<?php
require 'includes/conexion.php';
session_start();

$varsesion = $_SESSION['email'];

if ($varsesion == null || $varsesion == '') {
    echo 'Inicie sesion primero';
    die();
}

//verificación de disponibilidad

$idCopia = $_GET['id'];
$sql = "SELECT * from copia where id_copia = '$idCopia'";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();
$estado=$row["id_estado_copia"];

if($estado==1){
    //Creación de la reserva

    $idUsuario = $_SESSION['id'];

    $fecha=date('d-m-y h:i:s');


    $sql = "INSERT INTO reserva(id_copia,id_usuario,fecha_reserva)
      VALUES ('$idCopia','$idUsuario','$fecha')";
    $resultado = $conexion->query($sql);

//Cambio de estado de la copia

    $sql = "UPDATE copia SET id_estado_copia=2, fecha_prestamo='$fecha' WHERE id_copia= '$idCopia'";
    $resultado = $conexion->query($sql);
}

header("location: MisReservas.php#");


?>