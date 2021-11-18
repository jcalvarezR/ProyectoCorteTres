<?php
  include "conexion.php";
  $mysqli = new mysqli("sql10.freesqldatabase.com", "sql10451838","WpkN1HRMC7","sql10451838");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
</head>
<body>
<div class="container-login">
        <div class="wrap-login">
 <div class="container mt-5">
                    <div class="row"> 
                        
                    
  
  <div id="contenido">
  	 
                <span class="login-form-title">NUEVO USUARIO</span>
  		<br>
	  <form action="nuevo_2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		
		<label>id: </label>
		
  		<input type="number"class="form-control mb-3"  name="id"required><br>
  		
  		<label>nombre: </label>
  		<input type="text" class="form-control mb-3" name="nombre"required><br>
  		
  		<label>correo: </label>
  		<input type="email" class="form-control mb-3" name="correo"required></textarea><br>
  		
		  <label>telefono: </label>
  		<input type="number" class="form-control mb-3" name="telefono"required></textarea><br>

		  <label>direccion: </label>
  		<input type="text" class="form-control mb-3" name="direccion"required></textarea><br>

		  <label>autor: </label>
  		<input type="number" class="form-control mb-3" name="id_autor"required></textarea><br>

		  <label>publicar: </label>
  		<input type="date" class="form-control mb-3" name="publicar"required></textarea><br>
		
		  <label>contraseña: </label>
  		<input type="password" class="form-control mb-3" name="contrasena"required></textarea><br>
		
  		<button type="submit" class="btn btn-success">Guardar</button>
		  <a href='home.php'  <button type='submit' name='volver' class='login-form-btn'>VOLVER</a></button>
						
               
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		
  	</div>

</div>
 <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>  

</body>
</html>