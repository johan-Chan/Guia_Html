<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            if(!$_COOKIE["sel_idioma"])
            {
                header("Location:../idioma/seleccionidioma.php"); //si no encuentra la cookie
            }
            else if ($_COOKIE["sel_idioma"]=="sp")
            {
                header("Location:../idioma/pag_español.php"); //archivo en español
            }
            else if ($_COOKIE["sel_idioma"]=="en")
            {
                header("Location:../idioma/pag_ingles.php"); //archivo en ingles
            }

    ?>
</body>
</html>