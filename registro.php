<?php
  $mysqli = new mysqli("sql10.freesqldatabase.com", "sql10454351","ZRPawxLMAg","sql10454351");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/main.css">    

    <title>REGISTRO</title>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
           <span class="text-prymary fs-5 fw-bold">WANOTE WEB</span> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
              </li> 
              
            </ul>  
            
          </div>
        </div>
      </nav>


    <div class="container">
        <div class="row m">
            <div class="col">

            </div>

            <div class="col">
               <div class="text-end">
                   <img src="./img/img1.png" width="300px" alt="">
               </div> 
               
               <h2 class="fw-bold text-center pt-5 py-5">Bienvenido</h2>
            
               <!-- REGISTRO-->

               <form action="nuevo_2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

                <div class="mb-4">
                  <label for="id_usuario" class="form-label">ID</label>
                  <input type="number" class="form-control" name="id_usuario"required>
                </div>

                  <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre"required>
                  </div>

                  <div class="mb-4">
                    <label for="apellido" class="form-label">apellido</label>
                    <input type="text" class="form-control" name="apellido"required>
                  </div>

                  <div class="mb-4 ">                          
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo"required>
                  </div>

                  <div class="mb-4 ">                          
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena"required>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">REGISTRARSE</button>
                    <a href='index.html'  <button type='submit' name='volver' class='login-form-btn'>VOLVER</a></button>
                  </div>

                  <div class="my-3">
                      <span>Ya tienes cuenta <a href="login.html"> Iniciar Sesion</a></span> <br>
                      
                  </div>
                  
              </form>

            </div>
        </div>
    </div>

    <section id="seccion-contacto" class="border-bottom border-secundary border-2"> 
        <div id="bg-contactos">

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,96C384,53,480,43,576,85.3C672,128,768,224,864,272C960,320,1056,320,1152,277.3C1248,235,1344,149,1392,106.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
          </svg>

        </div>     

      </section>

    <script src="bootstrap.bundle.min.js"> </script>
</body>
</html>