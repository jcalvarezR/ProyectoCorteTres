<?php
require '../../conexion.php';
session_start();


$email= $_POST['email'];
$password= $_POST['password'];


$query = "SELECT COUNT(*) as contar from usuario where correo = '$email' and contrasena = '$password'";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);





if($array['contar']>0){

    $_SESSION['email'] = $email;
    $sql = "SELECT * from usuario where correo = '$email' and contrasena = '$password'";
    $result = $conexion->query($sql);
    //while($row = $result->fetch_assoc()){
    //    echo "contrasena: ".$row["contrasena"]." - Correo: " .$row["correo"]."<br>";
    //}
    //header("location: ../paginaprincipal.php");
    $row = $result->fetch_assoc();
    echo "contrasena: ".$row["contrasena"]." - Correo: " .$row["correo"]."<br>";
    echo "tipo: ".$row["id_tipo_usuario"];
    if($row["id_tipo_usuario"]==1){
        header("location: ../DashboardAdmin.php");
    }
    elseif ($row["id_tipo_usuario"]==2){
        header("location: ../Dashboard.php");
    }
}else{
    echo "datos incorrectos";
}
?>