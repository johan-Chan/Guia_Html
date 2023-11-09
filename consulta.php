<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="./icon/Icono.png">
        <link rel="stylesheet" href="Estilos/index.css?ver=1.3">
</head>
<body>
    <?php
    require_once("Conex.php");
    $consulta = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $consulta);
    echo '<table>';
    while ($fila = mysqli_fetch_row($resultado)) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo '</table>';
    mysqli_close($conexion);
    ?>
    <a href="busquedaaa.php">Consultar</a>
    
</body>
</html>