<?php
require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "INSERT INTO personal(nombre_personal) values('panfilo')";

$insertar = mysql_query($conexion,$sql);

if (!$insertar){echo "Error al guardar";}else{echo "Guardado con exito";}

//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

?>
