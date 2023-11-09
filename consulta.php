<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="./icon/Icono.png">
        <link rel="stylesheet" href="Estilos/index.css?ver=1.3">
</head>
<body>
<div class="tabla">
<table width="60%" align="center" border="2" style="background-color:#1CC7E2;">
<tr>
    <th>Id Producto</th>
    <th>Seccion</th>
    <th>Producto</th>
    <th>Origen</th>
    <th>Importado</th>
    <th>Precio</th>
</tr>
    <?php
    require_once("Conex.php");
    $consulta = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $consulta);
    
    while($fila = mysqli_fetch_row($resultado)){
        echo "<tr>";
        echo "<td>" . $fila[0] . "</td>";
        echo "<td>" . $fila[1] . "</td>";
        echo "<td>" . $fila[2] . "</td>";
        echo "<td>" . $fila[3] . "</td>";
        echo "<td>" . $fila[4] . "</td>";
        echo "<td>" . $fila[5] . "</td>";
        echo "</tr>";
    }
    mysqli_close($conexion);
    ?>
    <a href="buscar.php" class="boton">Consultar</a><br>
    <a href="busquedaaa.php" class="boton">Consultar2</a>
    
</body>
</html>