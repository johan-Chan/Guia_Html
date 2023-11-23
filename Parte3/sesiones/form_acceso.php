<?php
if(isset($_POST["enviar"]))
{
    try
    {
        $base=new PDO("mysql:host=localhost; dbname=html", "root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
            header("Location:pag_inicio.php");
        }else
        {
            //header("Location:form_acceso.php");
            echo "LOS DATOS DE USURIO SON INCORRECTOS";
        }
    }
    catch(Exeption $e)
    {
    die("Error" . $e->getMessange());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css?ver=1.9">
    <link rel="icon" href="../icon/icon2.png">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="cont">
        <p class="texto" >ACCESO AL SISTEMA</p>
        <p class="txt" >Usuario</p>
        <input class="cajita" type="email" name="correo">
        <p class="txt" >Contraseña</p>
        <input class="cajita" type="password" name="password"><br><br>
        <input class="recordarse" type="checkbox" name="recordar">
        <p class="record">¿Recordar este equipo?</p>
        <input class="guardar" type="submit" name="enviar" value="ENVIAR">
        </div>

    </form>
    
</body>
</html>