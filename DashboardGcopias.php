<?php
session_start();

$varsesion = $_SESSION['email'];

if ($varsesion == null || $varsesion = '') {
    echo 'Inicie sesion primero';
    die();
}
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
    <title> Administrador</title>
  </head>
  <body>
    
    <div class="d-flex">

    <!-- seccion barra zona izquierda-->

        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
            <img src="src/img/wanote.png" class="sophy">
                
            </div>
            <div class="menu">

                <a href="DashboardAdmin.php" class="d-block text-light p-3"><i class="icon ion-md-home mr-2 lead"></i>Inicio</a>
                <a href="DashboardGcopias.php" class="d-block text-light p-3"><i class="icon ion-md-filing"></i> Gestion de copias</a>
                <a href="DashboardGdocumentos.php" class="d-block text-light p-3"><i class="icon ion-md-bookmarks"></i>  Gestion documento</a>
                <a href="DashboardGusuarios.php" class="d-block text-light p-3"><i class="icon ion-md-contacts"></i> Gestion de usuarios</a>
                
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
                                <h1 class="font-weight-bold mb-0">Bienvenido/a a <b><i>Wanote</i></b> Administrador</h1>
                                <p class="lead text-muted">Gestione documentos y usuarios.</p>
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
                                        <h6 class="text-success">  para un mejor desempeño.  <i class="icon ion-md-checkmark"></i></h6>
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
                            <h6 class="m-0 font-weight-bold text-primary">Gestion copias</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_copia</th>
                                            <th>id_documento</th>
                                            <th>nombre</th>
                                            <th>id_estado_copia</th>
                                            <th>fecha_prestamo</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id_copia</th>
                                            <th>id_documento</th>
                                            <th>nombre</th>
                                            <th>id_estado_copia</th>
                                            <th>fecha_prestamo</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            
                                        </tr>
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