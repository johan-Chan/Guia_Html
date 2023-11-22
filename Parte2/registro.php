<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css?ver=1.5">
    <link rel="icon" href="./icon/icon2.png">

    <title>Registro</title>
</head>
<body>
    <p class="titulo">Gestion Productos</p>
    <br><br>
    <div class="caja">
        <form action="insertar_productos.php" method="get" class="form_registro">
        <div class="caja2">
            <p class="subtitulo">Agregar Producto</p>
            <input type="text" name="cod" placeholder="Digite el Codigo" class="inputs">
            <br><br>
            <input type="text" name="seccion" placeholder="Digite La seccion" class="inputs">
            <br><br>
            <input type="text" name="nombre" placeholder="Digite Nombre Producto" class="inputs">
            <br><br>
            <input type="text" name="origen" placeholder="Digite el Origen" class="inputs">
            <br>
            <p class="importaciones">Importaciones</p>
            <select name="import" class="inputs2">
                    <option value="VERDADERO">Verdadero</option>
                    <option value="FALSO">Falso</option> 
            </select>
            <br><br> 
            <input type="text" name="precio" placeholder="Digite el Precio" class="inputs">
            <input type="submit" value="guardar" class="guardar">

            <input type="submit" value="Limpiar" class="Limpiar">
        </div>
        </form>
    </div>
    
</body>
</html>
<?php





?>