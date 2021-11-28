<DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="styleEditarPerfil.css">
        <title>Editar perfil</title>
    </head>

    <body>
        <center>
        <!-- Formulario edicion perfil -->
            <div class="box">
                <img src="images/perfil2.png"></img>
                <form action="../editar.php" method="POST">
                <input type="text" name="id" id="id" placeholder="Id">
                <input type="text" name="nombre" id="nombre" placeholder="Nombres">
                <input type="text" name="apellido" id="apellido" placeholder="Apellidos">
                <input type="text" name="correo" id="correo" placeholder="Correo">
                <button style="float: left;margin:10px 0 0 18.2%;">Cancelar</button>
                <button style="float: right;margin:10px 18.2% 0 0;">Aceptar</button>
                </form>
                
            </div>
        </center>
    </body>


</html>
</html>