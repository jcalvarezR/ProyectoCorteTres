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
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['correo'] = $row['correo'];

?>


<DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="src/css/styleEditarPerfil.css">
        <title>Editar perfil</title>
    </head>

    <body>
        <center>
        <!-- Formulario edicion perfil -->
            <div class="box">
                <img src="src/img/perfil2.png"></img>
                <form action="includes/editar.php" method="POST">
                    <h2>ID: <?php echo $_SESSION['id']  ?></h2>
                <input type="text" name="nombre" id="nombre" placeholder="Nombres" value="<?php echo $_SESSION['nombre']?>">
                <input type="text" name="apellido" id="apellido" placeholder="Apellidos" value="<?php echo $_SESSION['apellido']?>">
                <input type="text" name="correo" id="correo" placeholder="Correo" value="<?php echo $_SESSION['correo']?>">
                <button style="float: left;margin:10px 0 0 18.2%;">Cancelar</button>
                <button style="float: right;margin:10px 18.2% 0 0;">Aceptar</button>
                </form>
                
            </div>
        </center>
    </body>


</html>
</html>