/*<!DOCTYPE html>
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
    <div class="container">*/
    <?php
      require_once 'content/mysql-login.php';
      try {
        $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        //SQL 
$sql = "SELECT * FROM areas";	

//Enviar la consulta a la BD  usando  query->  (hay otros formas de hacerlo, ver ayuda de PHP)
$result = $connect->query($sql);

/**
 * Se crea un array asociativo  de los  resultados usando fecht-> y se almacena en $datos
 *  Hay otras formas de almacenar el  resultado según las  necesidades...
 *  Ver ayuda de PHP para  otras variantes de  fetch
*/ 
$datos = $result->fetch(PDO::FETCH_ASSOC);

//Se verifica que la consulta  devolvió valores
if ($result->rowCount() > 0)
{
    print_r($datos);
}else{
 print_r("No se encontraron datos, verifique su conexión o la consulta enviada");   
}
     ?>
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
      $con =null;*/
    ?>
    </div>
  </body>
</html>
