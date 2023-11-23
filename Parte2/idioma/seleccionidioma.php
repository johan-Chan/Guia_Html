<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/paginas_idioma.css?ver=1.4">
    <link rel="icon" href="../icon/icon2.png">
    <title>seleccion</title>
</head>
<body>
    <p class="titulo">Como utilizar php</p><br><br>
    
    <img class="imgs" src="../icon/phppp.jpeg" width="500" height="300">

    <p class="subtitulo">¿Cómo se aplica el PHP?</p>

    <p class="texto"> 
        El código PHP se integra en una página HTML, entre los símbolos de resultado . <br>Los comandos PHP 
        irán dentro de las áreas PHP (por regla general con un punto y coma). También podrás colocar tus
        páginas web dentro de un Editor HTML gráfico e introducir los códigos en modo HTML dentro de un 
        editor de texto. <br>
        PHP es un lenguaje de script múltiple, que a diferencia de por ejemplo Javascript, es ejecutado en 
        el servidor y por tanto no permanece bajo el control del navegador. Frecuentemente los campos de 
        entrada están en otros foros, formularios, sistema de redacción, libro de visitas y máquinas de 
        búsqueda
    </p>
    <?php

        if(isset($_COOKIE["sel_idioma"]))
        {
            if($_COOKIE["sel_idioma"]=="sp")
            {
                header("Location:pag_español.php")
            }
            else if ($_COOKIE["sel_idioma"]=="en")
            {
                header("Location:pag_ingles.php")
            }
        }

    ?>
  
    <a href="crearcookie.php?idioma=sp">
        <img class="español" src="../icon/esp.jpg" width="200" height="100">
    </a>
    <a href="crearcookie.php?idioma=en">
        <img class="ingles" src="../icon/ingles.jpeg" width="200" height="100">
    </a>
</body>
</html>