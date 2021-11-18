<?php
include "conexion.php";
$mysqli = new mysqli("sql10.freesqldatabase.com", "sql10451838","WpkN1HRMC7","sql10451838");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$id_autor = $_POST['id_autor'];
$publicar = $_POST['publicar'];
$contrasena = $_POST['contrasena'];




$sql = "INSERT INTO usuario(id,nombre,correo,telefono,direccion,id_autor,publicar,contrasena) 
      VALUES ('$id','$nombre','$correo','$telefono','$direccion','$id_autor','$publicar','$contrasena')";
$resultado = $mysqli->query($sql);

		

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";
?>
<!--if(filter_var(($correo, FILTER_VALIDATE_EMAIL)){
	mail("ejemplo@me.com",$correo,$codigo,$usuario,$contrasena,$fecha);
	header("home.php?cod_usuario=correcto");
}else
{
header("home.php?cod_usuario=incorrect0");
	{