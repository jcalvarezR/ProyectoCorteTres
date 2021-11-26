<?php
include "conexion.php";
$mysqli = new mysqli("sql10.freesqldatabase.com", "sql10454351","ZRPawxLMAg","sql10454351");

$id = $_POST['id_usuario'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];



$sql = "INSERT INTO usuario(id_usuario,nombre,apellido,correo,contrasena) 
      VALUES ('$id','$nombre','$apellido','$correo','$contrasena')";
$resultado = $mysqli->query($sql);

		

echo "<meta http-equiv='refresh' content='0; url=index.html'>";

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";
?>
<!--if(filter_var(($correo, FILTER_VALIDATE_EMAIL)){
	mail("ejemplo@me.com",$correo,$codigo,$usuario,$contrasena,$fecha);
	header("home.php?cod_usuario=correcto");
}else
{
header("home.php?cod_usuario=incorrect0");
	{
