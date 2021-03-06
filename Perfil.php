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
    

?>


<!DOCTYPE html>
<html>
        <head>
         <title>Perfil</title>
         <!-- Font Awesome -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
         <!-- Google Fonts -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
         <!-- Bootstrap core CSS -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
         <!-- Material Design Bootstrap -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        </head>
    <body class="bg-dark">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left">
                            <div class="card-block text-center text-dark">
                                <br><br>
                                <i class="fas fa-user-tie fa-7x mt-5"></i>
                                <h2 class="font-weight-bold mt-4"><?php echo $row['nombre']." " .$row['apellido']   ?></h2>
                                
                                <!-- Link que lleva al formulario para editar el perfil -->
                                <a href="EditarPerfil.php"><i class="far fa-edit fa-2x mb-4"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-white rounded-right">
                            <h3 class="mt-3 text-center">Informaci??n</h3>
                            <hr class="badge-primary mt-0 w-25">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Post libros:</p>
                                        <h6 class="text-muted">0 </h6>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Likes:</p>
                                        <h6 class="text-muted">0 </h6>
                                    </div>
                                    <!--
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Apellidos:</p>
                                        <h6 class="text-muted">Hernandez Sanchez</h6>
                                    </div>
                                    -->
                                </div>
                            <h4 class="mt-3">Otros datos:</h4>
                            <hr class="bg-primary">
                                <div class="row">
                                <div class="col-sm-6">
                                        <p class="font-weight-bold">Nombre:</p>
                                        <h6 class="text-muted"> <?php echo $row['nombre']?> </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Apellido:</p>
                                        <h6 class="text-muted"><?php echo $row['apellido']?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Correo:</p>
                                        <h6 class="text-muted"><?php echo $row['correo']?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Id:</p>
                                        <h6 class="text-muted"><?php echo $row['id_usuario']?></h6>
                                    </div>
                                </div>
                            <hr class="bg-primary">
                            <ul class="list-unstyled d-flex justify-content-center mt-4">
                               <!-- Boton facebook por si es necesario-->
                               <!-- <li><a href="#">Editar<i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <button>
                <a href="DashboardUsuario.php">Devolverse A Dashboard</a>
            </button>
        </div>

    </body>
</html>

