<?php
  //se almacenan las variables a insertar
  $tiempo = $_POST['tiempo'];
  $cupo = $_POST['cupo'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $fk_fecha = '';
  

  /*//llamar mysql-login.php que contiene los datos de la base de datos para conectar
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

  //query para consulta de fk_cupo y fk_telefono
  $query_select_fk_personal = "SELECT P.id_personal from cupos C, personal P WHERE P.fk_cupo = C.id_cupo and concat(C.fk_sede,C.cupo) = '$cupo'";
  
  //ejecucion de query para consulta de fk_cupo y fk_telefono o arrojo de error
  if(!$result_fk_personal = mysqli_query($conexion, $query_select_fk_personal)) die('Error:'.mysqli_error());

  //captura de fk_cupo mediante ciclo while
  while($row = mysqli_fetch_array($result_fk_personal)) { 
      $fk_personal=$row['id_personal'];
  }
  
  $query_select_asistencia = "SELECT id_asistencias from asistencias WHERE fk_personal = '$fk_personal' and fk_fecha = '$fk_fecha'";

  //ejecucion de query para consulta de fk_cupo y fk_telefono o arrojo de error
  if(!$result_id_asistencia = mysqli_query($conexion, $query_select_asistencia)) die('Error:'.mysqli_error());

  //captura de fk_cupo mediante ciclo while
  $asistencias = "false";
  while($row = mysqli_fetch_array($result_id_asistencia)) { 
      $asistencias = "true";
  }

  if($asistencias == "false"){
    $query_agrega_personal = "insert into asistencias(fk_personal,fk_fecha) values ('$fk_personal','$fk_fecha')";
    $result_agrega_personal = mysqli_query($conexion, $query_agrega_personal) or die('Error:'.mysqli_error());
  }

  $query_agrega_registro = "update asistencias set " . $tiempo . "='$hora' where fk_personal = '$fk_personal' and fk_fecha = '$fk_fecha'";
  $result_agrega_registro = mysqli_query($conexion, $query_agrega_registro) or die('Error:'.mysqli_error());
  
  mysqli_close($conexion)or die("Error en desconeccion");

  echo "registro exitoso";*/
  echo "" . $tiempo . " : " . $cupo . " : " . $fecha . " : " . $hora;
  
?>
