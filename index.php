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
    <?php
      //conexion por MySQL PDO
      require_once 'content/mysql-login.php';
      try {
        $DBcon = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print "Conexión exitosa!";
        $query = "SELECT * FROM areas";
 
        $stmt = $DBcon->prepare($query);
        $stmt->execute();
        
        $userData = array();

        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

              $userData['id_area'][] = $row;

        }
        echo json_encode($userData);
      }
        catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
        ";
        die();
      }
      $con =null;
    ?>
    <div class="container">
      <button onClick="window.location.href='#'>boton</button>
    </div>
  </body>
</html>
