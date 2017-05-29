<?php
//MySQLi
require_once 'mysql-login.php';
$mysqli = new mysqli($hostname, $username,$password, $database);
if ($mysqli -> connect_errno) {
die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
. ") " . $mysqli -> mysqli_connect_error());
}
else
echo "Conexión exitosa!";
$mysqli -> mysqli_close();
?>
