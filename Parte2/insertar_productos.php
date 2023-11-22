<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$id=$_GET["cod"];
$sec=$_GET["seccion"];
$prod=$_GET["nombre"];
$org=$_GET["origen"];
$imp=$_GET["import"];
$prec=$_GET["precio"];

require_once('conexion.php');

if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");

$consulta="INSERT INTO productos(id_producto,seccion,producto,origen,importada,precio) VALUES('$id','$sec','$prod','$org','$imp','$prec')";
$resultado = mysqli_query($conexion, $consulta);

if($resultado==false){
    echo "ERROR DE EJECUCION";
}else{
    echo "EL PRODUCTO FUE ALMACENADO CORRECTAMENTE CON LOS SIGUIENTES DATOS: <br><br><br>";
    echo "CODIGO: " . "$id" . "<br>";
    echo "SECCION: " . "$sec" . "<br>";
    echo "PRODUCTO: " . "$prod" . "<br>";
    echo "PAIS DE ORIGEN: " . "$org" . "<br>";
    echo "¿ES IMPORTADO?: " . "$imp" . "<br>";
    echo "PRECIO: " . "$prec" . "<br>";

}
    mysqli_close($conexion)

?>
</body>
</html>