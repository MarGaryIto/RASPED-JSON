<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT
P.id_puesto, P.nombre_puesto,A.nombre_area
FROM
puestos P,areas A
WHERE
fk_area = id_area";

mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if(!$result = mysqli_query($conexion, $sql)) die();
$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id_puesto=$row['id_puesto'];
    $nombre_puesto=$row['nombre_puesto'];
    $nombre_area=$row['nombre_area'];

    $clientes[] = array('id_puesto'=> $id_puesto, 'nombre_puesto'=>$nombre_puesto , 'nombre_area'=> $nombre_area);
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;    
?>
