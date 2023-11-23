<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pag_inicio.css?ver=1.4">
    <link rel="icon" href="../icon/icon2.png">
    <title>Español</title>
</head>
<body>
<?php

if(isset($_POST["enviar"]))
{
    try
    {
        $base=new PDO("mysql:host=localhost; dbname=html", "root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
        $sql="SELECT * FROM datos_usuario WHERE usuario= :login AND PASSWORD = :password";
        $resultado=$base->prepare ($sql);
        $login=htmlentities(addslashes($_POST["correo"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);
        $resultado->execute();
        $numero_regitro=$resultado->rowCount();
        if($numero_regitro!=0)
        {
            session_start();
            $_SESSION["usuario"]=$_POST["correo"];
            //header(Location:pag_inicio.php);
        }else
        {
            //header(Location:form_acceso.php);
            echo "LOS DATOS DE USURIO SON INCORRECTOS";
        }
    }
    catch(Exeption $e)
    {
    die("Error" . $e->getMessange());
    }
}
?>

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

</body>
</html>