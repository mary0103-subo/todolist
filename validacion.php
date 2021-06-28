<?php
include 'conexion.php';
//$usuario=$_POST["usuario"];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

$insertar="INSERT INTO usuario(email,contraseña)VALUES('$email','$contraseña')";

$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
    header("location:registro.php");
    echo"usuario no regisstrado";


}else{
    header("location:login.php");
}

mysqli_close($conexion);
 ?>
