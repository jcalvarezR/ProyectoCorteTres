<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/main.css">
    <link href="bootstrap.min.css" rel="stylesheet">



    <title>LOGIN</title>

    <style>
        body{
            background:#ddad44;
            background:linear-gradient(to right, #f8ff9b, #f8ff9b);
        }

        .bg{
            background-image:url(./img/img.png);
            background-position: center center;


        }
    </style>

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
        <div class="col bg">

        </div>

        <div class="col">
            <div class="text-end">
                <img src="./img/img1.png" width="300px" alt="">
            </div>

            <h2 class="fw-bold text-center pt-5 py-5">Bienvenido</h2>

            <!-- LOGIN-->

            <form action="logica/loguear.php" method="POST">

                <div class="mb-4">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>

                
                <div class="d-grid">
                    <button type="submit" id="entrar" class="btn btn-primary">Iniciar Sesion</button>
                </div>

                <div class="my-3">
                    <span>No tienes cuenta? <a href="../registro.php">Registro</a></span> <br>
                    <span><a href="recuperarContraseña.html">Recuperar Contraseña</a></span>
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