<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORMULARIO</title>
</head>

<body>
  <?php
  $autenticar = false;

  if (isset($_POST["enviar"])) {
    try {
      $base = new PDO("mysql:host=localhost; dbname=usuario", "root", "");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM datos_usuario WHERE usuario= :login AND contraseña= :password";
      $resultado = $base->prepare($sql);
      $corre = htmlentities(addslashes($_POST["correo"]));
      $contra = htmlentities(addslashes($_POST["contraseña"]));
      $resultado->bindValue(":login", $corre);


      $resultado->bindValue(":password", $contra);

      $resultado->execute();

      $numero_registro = $resultado->rowCount();
      echo $numero_registro;
      if ($numero_registro != 0) {
        $autenticar = true;
        if (isset($_POST["recordar"])) {
          setcookie("datos_usuario", $_POST["correo"], time() + 1220000);
        } else {
          echo "Los datos son correctos";
        }
      } else {
        echo "Los datos son incorrectos";
      }
    } catch (Exception $e) {
      die("Error:" . $e->getMessage());
    }
  }

  ?>
  <header>
    <h1 class="title" align="center">Pagina de información sobre adopciones</h1>
    <?php
    if ($autenticar == false) {
      if (!isset($_COOKIE["datos_usuario"])) {
        include("form_acceso.php");
      }
    }
    ?>
  </header>
  <?php

  if ($autenticar == true || isset($_COOKIE["datos_usuario"])) {
    include("perfil_usuario.php");
  }

  ?>
    <p>
    <h1>Alta Adopcion de gatitos callejeros</h1>
    </p>
 
        <p>
          <alingh3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia veritatis facilis esse 
            facere dolorum voluptatum suscipit nulla nobis sunt, ducimus quos deserunt, placeat laborum co
            rporis sapiente numquam obcaecati, voluptatibus magni. Lorem ipsum dolor sit amet consectetur adi
            pisicing elit. Voluptatibus ut possimus suscipit ipsam esse autem, numquam, ipsum aperiam magni er
            ror repellendus quae reiciendis placeat tenetur voluptatem sit eius! Ut, similique.
            <alingh3>
        </p>

    <br>
    <nav>
        <li><a href="eliminar_cookie.php">Cerrar sesión</a></li>
    </nav>

</body>

</html>