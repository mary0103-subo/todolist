<?php
include'conexion.php';
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

$conexion= mysqli_connect("localhost","root","123456","listado");

$consul="SELECT *FROM usuario where email= '$email' and contraseña='$contraseña'";

$resul= mysqli_query($conexion,$consul);

$mostrar=mysqli_num_rows($resul);

if($mostrar){
    header("location:entrada.php");
}
else{
     header("location:login.php"); 
}

mysqli_free_result($resul);
mysqli_close($conexion);
