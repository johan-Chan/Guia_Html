<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/paginas_idioma.css?ver=1.5">
    <link rel="icon" href="../icon/icon2.png">
    <title>seleccion</title>
</head>
<body>
    <p class="titulo">
        Cual idioma prefieres<br>-------------------/----------------<br> Which language do you prefer?
    </p><br><br>
    <?php

        if(isset($_COOKIE["sel_idioma"]))
        {
            if($_COOKIE["sel_idioma"]=="sp")
            {
                header("Location:pag_español.php");
            }
            else if ($_COOKIE["sel_idioma"]=="en")
            {
                header("Location:pag_ingles.php");
            }
        }

    ?>
    <a href="../cookies/crearcookie.php?idioma=sp">
        <img class="español" src="../icon/esp.jpg" width="200" height="100">
    </a>
    <a href="../cookies/crearcookie.php?idioma=en">
        <img class="ingles" src="../icon/ingles.jpeg" width="200" height="100">
    </a>
</body>
</html>