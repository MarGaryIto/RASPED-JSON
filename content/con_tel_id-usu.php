<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//almacenamos variables
$contrasena = $_REQUEST['contrasena'];
$telefono = $_REQUEST['telefono'];

//Generamos la colsulta
$sql = "SELECT * from personal;
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
	$contrasena=$row['contrasena'];
	$telefono=$row['telefono'];
	$id_personal=$row['id_personal'];

	$clientes[] = array('contrasena'=> $contrasena, 'telefono'=> $telefono,'id_personal'=>$id_personal);

}
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
	

?>
