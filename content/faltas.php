<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "select P.id_personal, concat(C.fk_sede,C.cupo) as cupo, I.id_falta, P.nombre_personal, P.apellido_m, P.apellido_p, F.fecha
from personal P, faltas I, fechas F, cupos C
where I.fk_personal = P.id_personal and
I.fk_fecha = F.id_fecha and
P.fk_cupo = C.id_cupo";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

//ejecución de la consulta
if(!$result = mysqli_query($conexion, $sql)) die();

//se crea un array
$clientes = array();

//recoleccion de datos mediante un ciclo while(mientras haya registros)
while($row = mysqli_fetch_array($result)) { 
    $id_personal=$row['id_personal'];
    $cupo=$row['cupo'];
    $id_falta=$row['id_falta'];
    $nombre_personal=$row['nombre_personal'];
    $apellido_m=$row['apellido_m'];
    $apellido_p=$row['apellido_p'];
    $fecha=$row['fecha'];
    $clientes[] = array('id_personal'=> $id_personal, 'cupo'=>$cupo, 'id_falta'=> $id_falta, 'nombre_personal'=> $nombre_personal, 'apellido_m'=> $apellido_m, 'apellido_p'=> $apellido_p,
                        'fecha'=> $fecha);
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;    
?>
