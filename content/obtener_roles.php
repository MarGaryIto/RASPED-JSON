<?php

      //conexion por MySQL PDO
      require_once 'content/mysql-login.php';
      try {
        $conexion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        print "Conexión exitosa!";
      }
        catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
        ";
        die();
      }

/*mysql_select_db($database, $conexion); 

$query = mysql_query("SELECT * FROM Roles"); 

$convertToJson = array();

while($row = mysql_fetch_array($query, MYSQL_ASSOC))
{
$rowArray['id_anuncio'] = $row['id_anuncio'];

$rowArray['Titulo'] = $row['Titulo'];

$rowArray['Descripcion'] = $row['Descripcion'];

$rowArray['Requisitos'] = $row['Requisitos']; 

array_push($convertToJson, $rowArray);

}
json_encode($convertToJson);

$listaEmpleos = "json/listaEmpleos.json";

$data = json_encode($convertToJson); 

if ($fp = fopen($listaEmpleos, "w"))
{
fwrite($fp, $data);
}
fclose($fp);

mysql_close($conexion) */

?>
