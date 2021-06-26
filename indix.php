<?php 
function 
$s="localhost";
$bd="listado";
$u="root";
$p="123456";

$conexion= new mysql_connect($s,$bd,$u,$p);

if($conexion->connect_errno){
    echo "No conectado";
}
 else{
     echo "Conectado";
 }




?>