<?php

$db_host="localhost";
$db_nombre="html";
$db_usuario="root";
$db_contra="";


$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADOO";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");


?>