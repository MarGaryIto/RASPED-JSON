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
      
      
$host_db = "jsk3f4rbvp8ayd7w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
$user_db = "	gcco4yk6co4njuol";
$pass_db = "lxhp0mnq7iicqc32";

$conexion = mysql_connect($host_db, $user_db, $pass_db);

if (!$conexion)

{
die('Error: ' . mysql_error());
}

mysql_select_db("agxe4dwzsdjevn9l", $conexion); 

$query = mysql_query("SELECT * FROM areas"); 

$convertToJson = array();

while($row = mysql_fetch_array($query, MYSQL_ASSOC))
{
$rowArray['id_area'] = $row['id_area'];

$rowArray['area'] = $row['area'];

array_push($convertToJson, $rowArray);

}
print json_encode($convertToJson);

$listaEmpleos = "json/listaEmpleos.json";

$data = json_encode($convertToJson); 

if ($fp = fopen($listaEmpleos, "w"))
{
fwrite($fp, $data);
}
fclose($fp);

mysql_close($conexion) 

      
      
      
      
      
      /*conexion por MySQL PDO
      require_once 'content/mysql-login.php';
      try {
        $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        print "Conexión exitosa!";
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
