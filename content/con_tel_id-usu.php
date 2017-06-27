<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT P.contrasena,
concat(T.fk_lada,T.telefono) as telefono,
P.id_personal
FROM personal P, telefonos T
WHERE P.fk_telefono = T.id_telefono";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $contrasena=$row['contrasena'];
    $telefono=$row['telefono'];
    $id_personal=$row['id_personal']

    $clientes[] = array('contrasena'=> $contrasena);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
    
?>
