<?php
session_start();

if(!isset($_SESSION["usuario"]))
{
    header("Location:form_acceso.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css?ver=1.2">
    <link rel="icon" href="../icon/icon2.png">
    <title>Menu</title>
</head>
<body>
    <div class="cont">
        <p class="titulo">Menu</p>
        <button class="productos"><a href="producto.php">Productos</a></button><br><br>
        <button class="pag_idioma"><a href="http://localhost/guiahtml/Guia_Html/Parte2/idioma/seleccionidioma.php">Pag Idiomas</a></button>

    </div> 
</body>
</html>