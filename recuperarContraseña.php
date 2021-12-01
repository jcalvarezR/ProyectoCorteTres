<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="src/css/main.css">    

    <title>LOGIN</title>
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
                   <img src="src/img/img1.png" width="300px" alt="">
               </div> 
               
               <h2 class="fw-bold text-center pt-5 py-5">Bienvenido</h2>
            
               <!-- LOGIN-->

              <form action="#">
                <span><p href="#">Ingrese el correo registrado para enviar el reinicio de contraseña</p></span>

                  <div class="mb-4">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" name="email">
                  </div>

                  

                  <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Recuperar</button>
                  </div>

                  <div class="my-3">
                      <span>No tienes cuenta? <a href="registro.php">Registro</a></span> <br>
                      <span><a href="#">Recuperar Contraseña</a></span>
                  </div>
              </form>

            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.min.js"> </script>
</body>
</html>