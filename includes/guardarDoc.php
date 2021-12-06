<?php
require 'conexion.php';
session_start();
//guardado de documento

$editorial = $_POST['id_editorial'];
$idUsuario = $_SESSION['id'];
$numero_copias=$_POST['numero_copias'];
$tipo_documento = $_POST['id_tipo_documento'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fecha_publicacion = $_POST['fecha_publicacion'];
$isbn = $_POST['isbn'];
$ssn = $_POST['ssn'];
$adicional = $_POST['adicional'];
$tipo_copia = $_POST['tipo_copia'];



$sql = "INSERT INTO documento(id_editorial,id_usuario,id_tipo_documento,nombre,descripcion,fecha_publicacion,isbn,ssn,adicional) 
      VALUES ('$editorial','$idUsuario','$tipo_documento','$nombre',' $descripcion','$fecha_publicacion','$isbn','$ssn','$adicional')";
$resultado = $conexion->query($sql);

		//guardado de copias
$sql = "SELECT * from documento where id_editorial = '$editorial'and id_usuario = '$idUsuario' and 
id_tipo_documento='$tipo_documento' and
 nombre='$nombre' and
 
  fecha_publicacion='$fecha_publicacion'and 
  isbn='$isbn'
  and ssn='$ssn'
  and adicional='$adicional'";	

$result = $conexion->query($sql);
$row = $result->fetch_assoc();
$id_documento=$row["id_documento"];
$fecha=date('y-m-d h:i:s');
for ($i = 0; $i < $numero_copias; $i++) {
   $sql= "INSERT into copia(id_documento,id_estado_copia,fecha_prestamo,tipo_copia)
   VALUES('$id_documento','1','$fecha','$tipo_copia')";
   $resultado = $conexion->query($sql);
}
echo "<meta http-equiv='refresh' content='0; url=../DashboardUsuario.php'>";

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";
?>
<!--if(filter_var(($correo, FILTER_VALIDATE_EMAIL)){
	mail("ejemplo@me.com",$correo,$codigo,$usuario,$contrasena,$fecha);
	header("home.php?cod_usuario=correcto");
}else
{
header("home.php?cod_usuario=incorrect0");
	{
