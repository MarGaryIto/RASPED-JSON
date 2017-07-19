<?php
  //se almacenan las variables a insertar
  $tiempo = $_POST['tiempo'];
  $fk_personal = $_POST['fk_personal'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $fk_fecha = '';
  

  //llamar mysql-login.php que contiene los datos de la base de datos para conectar
  require_once ('mysql-login.php');

  //ejecucion de conexion o devolucion de error
  $conexion = mysqli_connect($server, $user, $pass,$bd);;
  if (!$conexion) {
    die('Connect Error: '.mysqli_connect_error());
  }

  //estándar de codificación Unicode Transformation 8 bits para compatibilidad ASCII
  mysqli_set_charset($conexion, "utf8");

  //consultas - inserccion de cupos y telefonos
  $query_insert_fecha= "insert ignore into fechas(fecha) values ('$fecha')";

  //ejecucion - inserccion de cupos y telefonos
  $result = mysqli_query($conexion, $query_insert_fecha) or die('Error:'.mysqli_error());

  //query para consulta de fk_cupo y fk_telefono
  $query_select_fk_fecha = "SELECT id_fecha from fechas WHERE fecha = '$fecha'";
  
  //ejecucion de query para consulta de fk_cupo y fk_telefono o arrojo de error
  if(!$result_fk_fecha = mysqli_query($conexion, $query_select_fk_fecha)) die('Error:'.mysqli_error());

  //captura de fk_cupo mediante ciclo while
  while($row = mysqli_fetch_array($result_fk_fecha)) { 
      $fk_fecha=$row['id_fecha'];
  }
  
  $query_select_asistencia = "SELECT id_asistencias from asistencias WHERE
  fk_personal = '$fk_personal' and 
  fk_fecha = 'fk_fecha'";

  /*//ejecucion de query para consulta de fk_cupo y fk_telefono o arrojo de error
  if(!$result_id_asistencia = mysqli_query($conexion, $query_select_asistencia)) die('Error:'.mysqli_error());

  //captura de fk_cupo mediante ciclo while
  if (mysql_num_rows($result_id_asistencia)>0)
{
echo "Exite al menos un registro";
} else {
echo "No Existen registros";
}*/
  /*//query para la inserccion de usuario
  $query_insert_fecha = "insert ignore into 
  asistencias(fk_personal,fk_fecha)
  values('$fk_personal',$fk_fecha)";

  $query_insert_tiempo = "insert into 
  personal(fk_cupo,nombre_personal,apellido_m,apellido_p,
  fk_telefono,contrasena)
  values($fk_cupo,'$nombre_personal','$apellido_m','$apellido_p',
  $fk_telefono,'$contrasena')";

  $result = mysqli_query($conexion, $query_insert_personal) or die('Error:'.mysqli_error());*/
  
  mysqli_close($conexion)or die("Error en desconeccion");
  
  echo "tiempo: ";
  echo $tiempo;
  echo "fk_personal: ";
  echo $fk_personal;
  echo "fecha: ";
  echo $fecha;
  echo "hora: ";
  echo $hora;
  echo "fk_hora: ";
  echo $fk_fecha;
?>

