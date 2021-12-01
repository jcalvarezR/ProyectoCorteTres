<?php
include "conexion.php";
$mysqli = new mysqli("sql10.freesqldatabase.com", "sql10454351","ZRPawxLMAg","sql10454351");

$id = $_POST['id_documento'];
$editorial = $_POST['id_editorial'];
$id_usuario = $_POST['id_usuario'];
$tipo_documento = $_POST['id_tipo_documento'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fecha_publicacion = $_POST['fecha_publicacion'];
$isbn = $_POST['isbn'];
$ssn = $_POST['ssn'];
$adicional = $_POST['adicional'];



$sql = "INSERT INTO documento(id_documento,id_editorial,id_usuario,id_tipo_documento,nombre,descripcion,fecha_publicacion,isbn,ssn,adicional) 
      VALUES ('$id','$editorial','$id_usuario','$tipo_documento','$nombre',' $descripcion','$fecha_publicacion','$isbn','$ssn','$adicional')";
$resultado = $mysqli->query($sql);

		

echo "<meta http-equiv='refresh' content='0; url=Dashboard.php'>";

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";
?>
<!--if(filter_var(($correo, FILTER_VALIDATE_EMAIL)){
	mail("ejemplo@me.com",$correo,$codigo,$usuario,$contrasena,$fecha);
	header("home.php?cod_usuario=correcto");
}else
{
header("home.php?cod_usuario=incorrect0");
	{