<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "select P.id_personal, A.id_asistencias, P.nombre_personal,
P.apellido_m, P.apellido_p, F.fecha, A.hr_entrada,
A.hr_comida_i, A.hr_comida_f, A.hr_salida
from personal P, asistencias A, fechas F
where A.fk_personal = P.id_personal and A.fk_fecha = F.id_fecha";

mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if(!$result = mysqli_query($conexion, $sql)) die();
$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id_personal=$row['id_personal'];
    $id_asistencias=$row['id_asistencias'];
    $nombre_personal=$row['nombre_personal'];
    $apellido_m=$row['apellido_m'];
    $apellido_p=$row['apellido_p'];
    $fecha=$row['fecha'];
    $hr_entrada=$row['hr_entrada'];
    $hr_comida_i=$row['hr_comida_i'];
    $hr_comida_f=$row['hr_comida_f'];
    $hr_salida=$row['hr_salida'];

    $clientes[] = array('id_personal'=> $id_personal, 'id_asistencias'=> $id_asistencias, 'nombre_personal'=> $nombre_personal, 'apellido_m'=> $apellido_m, 'apellido_p'=> $apellido_p,
                        'fecha'=> $fecha, 'hr_entrada'=> $hr_entrada, 'hr_comida_i'=> $hr_comida_i, 'hr_comida_f'=> $hr_comida_f, 'hr_salida'=> $hr_salida,  );
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;    
?>
