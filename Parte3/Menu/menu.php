<?php
session_start();

if(!isset($_SESSION["usuario"]))
{
    header("Location:form_acceso.php");
    
}else
{
    echo "BIENVENIDO AL SISTEMA " . $_SESSION["usuario"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css?ver=1.1">
    <link rel="icon" href="../icon/icon2.png">
    <title>Menu</title>
</head>
<body>
    
</body>
</html>