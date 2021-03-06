<?php
require 'includes/conexion.php';
session_start();

$varsesion = $_SESSION['email'];

if ($varsesion == null || $varsesion = '') {
    echo 'Inicie sesion primero';
    die();
}

$id_documento = $_GET['id'];
$sql = "SELECT c.id_copia, d.nombre as documento, ec.nombre as estado, 
               c.fecha_prestamo, tc.nombre as tipo, c.id_documento, d.isbn, d.ssn, c.id_estado_copia
        FROM copia as c, documento as d, estado_copia as ec, tipo_copia as tc
        WHERE c.id_documento = d.id_documento AND
              c.id_estado_copia = ec.id_estado_copia AND
              c.tipo_copia = tc.id_tipo_copia AND
              c.id_documento=".$id_documento;
$result = $conexion->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/StyleDashboard.css">
    <title> usuario</title>
</head>
<body>

<div class="d-flex">

    <!-- seccion barra zona izquierda-->

   
    <div id="sidebar-container" class="bg-primary">
            <div class="logo">
            <img src="src/img/wanote.png" class="sophy">
                
            </div>
            <div class="menu">
                
                <a href="DashboardUsuario.php" class="d-block text-light p-3"><i class="icon ion-md-home mr-2 lead"></i>Inicio</a>
                <a href="Perfil.php" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i>Perfil</a>
                <a href="FormDoc.php" class="d-block text-light p-3"><i class="icon ion-md-bookmarks"></i>  Publicar Documento</a>
                <a href="PrestamoDocumentos.php" class="d-block text-light p-3"><i class="icon ion-md-hand"></i> Pedir Copia</a>
                <a href="MisReservas.php" class="d-block text-light p-3"><i class="icon ion-md-hand"></i> Reservas</a>
            </div>
        </div>

    <!-- seccion nabvar-->

    <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline position-relative my-2 d-inline-block">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                </form>

        </nav>
        <!--Seccion de informacion-->
        <div id="content">
            <section class="py-3">
                <div class="container">
                    <div class="row">
                        
                            <div class="col-lg-9">
                                <p class="lead text-muted">Podra publicar y pedir los documentos y libros que desee, disfrute de un contenido exclusivo
                                e interesante.</p>
                            </div>

                        <!--Boton normal
                            <div class="col-lg-3 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Descargar Reporte</button>
                            </div>
                        -->
                        <!--
                        <div class="col-lg-1 d-flex">
                            <button class="btn btn-primary w-100 align-self-center">Word</button>
                        </div>

                        <div class="col-lg-1 d-flex">
                            <button class="btn btn-primary w-100 align-self-center">Excel</button>

                        </div>
                        <div class="col-lg-1 d-flex">
                            <button class="btn btn-primary w-100 align-self-center">PDF</button>

                        </div>
-->




                    </div>
                </div>
            </section>
            <!--Seccion de las cartas informativas-->
            <section class="bg-mix">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Podra leer contenido </h6>
                                        <h6 class="font-weight-bold">exclusivo de cualquier</h6>
                                        <h6 class="text-success">tipo de documento.  <i class="icon ion-md-copy"></i></h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Podra iniciar como </h6>
                                        <h6 class="font-weight-bold">autor y publicar</h6>
                                        <h6 class="text-success"> sus documentos.  <i class="icon ion-md-happy"></i></h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Tendra acceso a documentos </h6>
                                        <h6 class="font-weight-bold">de todo tipo para</h6>
                                        <h6 class="text-success">  disfrutar al maximo.  <i class="icon ion-md-heart"></i></h6>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Disfruta de Wapad le haremos</h6>
                                        <h6 class="font-weight-bold"> actualizaciones continuas</h6>
                                        <h6 class="text-success">  para un mejor desempe??o.  <i class="icon ion-md-checkmark"></i></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="bg-grey">
                <div class="container">
                    <br>



                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gestion documentos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>

                                    <tr>
                                        <th>estado</th>
                                        <th>fecha de prestamo</th>
                                        <th>identificador</th>
                                        <th>documento</th>
                                        <th>tipo</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>estado</th>
                                        <th>fecha de prestamo</th>
                                        <th>identificador</th>
                                        <th>documento</th>
                                        <th>tipo</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php


                                    while($row = $result->fetch_assoc()){
                                        $identificador=$row['ssn'];
                                        $numero=0;
                                        if($identificador==0){
                                            $identificador="ISBN";
                                            $numero=$row['isbn'];
                                        }else{
                                            $identificador="SSN";
                                            $numero=$row['ssn'];
                                        }
                                        $documento=$identificador." ".$numero."-".$row['documento'];
                                        $fecha="";
                                        $estado=$row['id_estado_copia'];
                                        if($estado==1){
                                            $estado="<a href='Reservar.php?id=".$row['id_copia']."'>Reservar</a>";
                                        }else{
                                            $estado=$row['estado'];
                                            $fecha=$row['fecha_prestamo'];
                                        }
                                        echo "<tr>
                                                <td>".$estado."</td>
                                                <td>".$fecha."</td>
                                                <td>".$row['id_copia']."</td>
                                                <td>".$documento."</td>                                                
                                                <td>".$row['tipo']."</td>
                                            </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>





            </section>
        </div>
        <!---->
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Script instalacion componente de las barras -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js" integrity="sha256-qoN08nWXsFH+S9CtIq99e5yzYHioRHtNB9t2qy1MSmc=" crossorigin="anonymous"></script>
<!-- Script de las barras -->


</body>
</html>
