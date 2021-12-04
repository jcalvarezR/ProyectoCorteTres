<?php
require 'includes/conexion.php';
session_start();

$varsesion = $_SESSION['email'];


 if ($varsesion == null || $varsesion == '') {
    echo 'Inicie sesion primero';
    die();
} 

    
    $sql = "SELECT * from usuario where correo = '$varsesion'";
    $result = $conexion->query($sql);
    
    $row = $result->fetch_assoc();
    
    $_SESSION['id'] = $row['id_usuario'];
    

?>



<h1> <?php echo $_SESSION['id'] ?> </h1>