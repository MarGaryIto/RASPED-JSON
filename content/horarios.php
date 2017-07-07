<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT
*
FROM
horarios
";

mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if(!$result = mysqli_query($conexion, $sql)) die();
$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id_horario=$row['id_horario'];
    $hr_entrada=$row['hr_entrada'];
    $hr_comida_i=$row['hr_comida_i'];
    $hr_comida_f=$row['hr_comida_f'];
    $hr_salida=$row['hr_salida'];
    $tolerancia=$row['tolerancia'];
    $hr_nombre=$row['hr_nombre'];

    $clientes[] = array('id_horario'=> $id_horario, 'hr_entrada'=> $hr_entrada, 'hr_comida_i'=> $hr_comida_i, 'hr_comida_f'=> $hr_comida_f, 'hr_salida'=> $hr_salida, 'tolerancia'=> $tolerancia, 'hr_nombre'=> $hr_nombre );
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;    
?>
