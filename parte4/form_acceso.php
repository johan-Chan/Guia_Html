<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario acceso</title>
    
</head>
<body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
      <h1 class="titulo">Acceso al sistema</h1>
 
        <label>Usuario:</label>
        <input type="email" name="correo" required autofocus><br>

        <label>Contraseña:</label>
        <input type="password" name="contraseña" required>

        <input type="checkbox" name="recordar">
        <label>Recordarme en este equipo</label>
        
        <input type="submit" name="enviar" value="Ingresar">

        </form>
        <br>

        <label>No tengo cuenta</label>
        <a href="registro.php">Crear cuenta</a>
</body>
</html>