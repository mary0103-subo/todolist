<?php
include 'conexion.php';

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

$insertar="INSERT INTO usuario(email,contraseña)VALUES('$email','$contraseña')";

$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
    header("location:registro.php");
    echo"usuario no registrado";


}else{
    header("location:login.php");
}

mysqli_close($conexion);
 ?>
