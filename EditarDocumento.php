<?php
require 'includes/conexion.php';
session_start();



$varsesion = $_SESSION['email'];


 if ($varsesion == null || $varsesion == '') {
    echo 'Inicie sesion primero';
    die();
} 

    
/*     $sql = "SELECT * from usuario where correo = '$varsesion'";
    $result = $conexion->query($sql);
    
    $row = $result->fetch_assoc();
    
    
     */
    $id = $_GET['id'];
    $sql = "SELECT * from documento where id_documento = '$id'";
    $result = $conexion->query($sql);
    
    $row = $result->fetch_assoc();
    $_SESSION['id_documento'] = $row['id_documento'];
    $_SESSION['id_editorial'] = $row['id_editorial'];
    $_SESSION['nombre_doc'] = $row['nombre'];
    $_SESSION['descripcion'] = $row['descripcion'];
    $_SESSION['fecha_publicacion'] = $row['fecha_publicacion'];
?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Roboto google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Iconos plataforma -->
    <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
    <!-- se llama a la hoja de estilos -->
    <link href="src/css/styleFormDoc.css" rel="stylesheet">
    <!-- recaptacha de google -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <title>Editar Documento</title>
</head>

<body>
    <section class="contact-box">
        <!-- columnas del formulario -->
        <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 register-bg">

            

            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Edite su documento</h1>
                    <h1> <?php echo 'Su Id es: '. $id ?> </h1>
                    <p class="text-muted mb-5">Diligenciar correctamente el documento.</p>

                    <form action="includes/editarD.php" method="POST"
                        style="border-collapse: separate; border-spacing: 10px 5px;">

                        <div class="form-row mb-2">
                            

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Id_editorial</label>
                                <input type="number" class="form-control" placeholder="Digite id de la editorial"
                                    name="id_editorial" id="id_editorial" value="<?php echo $_SESSION['id_editorial']?>">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre</label>
                                <input type="text" class="form-control" placeholder="Digite su nombre" name="nombre" id="nombre"
                                      value="<?php echo $_SESSION['nombre_doc']?>">
                            </div>


                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Descripcion</label>
                                <input type="text" class="form-control" placeholder="Digite la descripcion"
                                    name="descripcion" id="descripcion"  value="<?php echo $_SESSION['descripcion']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Fecha_publicacion</label>
                                <input type="date" class="form-control" placeholder="Digite la fecha de publiacacion"
                                    name="fecha_publicacion" id="fecha_publicacion"  value="<?php echo $_SESSION['fecha_publicacion']?>">
                            </div>


                            

                            <center>



                                <br>
                                <br> <br> <br>
                                <center><button class="btn btn-primary">Guardar</button>
                                    <a href='DashboardUsuario.php' <button  name='volver'
                                        class='login-form-btn'>VOLVER</a></button></center>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>