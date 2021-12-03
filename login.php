<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Roboto google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Iconos plataforma -->
    <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
    <!-- se llama a la hoja de estilos -->
    <link href="src/css/main2.css" rel="stylesheet">
    

    <title>Inicia Sesion</title>
  </head>
  <body>
    <section class="contact-box">
    <!-- columnas del formulario -->
        <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 register-bg">

            <div class="position-absolute testimonial p-4">
                <h3 class="font-weight-bold text-light">Wanote</h3>
                <p class="lead text-light"></p>
            </div>

            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Inicia Sesion</h1>
                    <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><ion-icon name="logo-google lead align-middle mr-2"></ion-icon>Google</button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><ion-icon name="logo-facebook lead align-middle mr-2"></ion-icon>Facebook</button>
                    </div>
                    <p class="text-muted mb-5">Ingresa la siguiente informacion para ingresar a la plataforma.</p>

                    <form action="includes/loguear.php" method="POST">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Correo electronico<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Digite su correo electronico" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Contraseña<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Digite una contraseña" name="password">
                            </div>
                            <br>
                            
                            
                            
                            
                        <br>
                        <button type="submit" name="entrar" class="btn btn-primary width-100">Iniciar Sesion</button>
                        
                        <div class="my-3">
                            <span>No tienes cuenta? <a href="registro.php">Registro</a></span> <br>
                            <span><a href="recuperarContraseña.php">Recuperar Contraseña</a></span>
                        </div>


                    </form>
                    
                
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>