<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>RASPED</title>
    <link rel="icon" type="image/ico" href="images/logo.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <?php
      //conexion por MySQL PDO
      require_once 'content/mysql-login.php';
      try {
        $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        print "Conexión exitosa!";
     ?>
      <br/>
        <button onclick="window.location.href='content/obtener_roles.php'" class="btn btn-default btn-block">
          <h3>todos los puestos</h3>
        </button>
      <?php
      }
        catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
        ";
        die();
      }
      $con =null;
    ?>
    </div>
  </body>
</html>
