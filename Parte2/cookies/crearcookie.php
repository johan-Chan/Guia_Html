<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cookie</title>
</head>
<body>
    <?php
    
    //setcookie("micookie","LOS DATOS DE LA COOKIE",time()+45)
    setcookie("sel_idioma", $_GET["idioma"],"in",time() - 1)

    
    ?>
</body>
</html>