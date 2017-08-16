<?php
  //se almacenan las variables a insertar
  
  $nombre_personal = $_POST['nombre_personal'];
  $apellido_m = $_POST['apellido_m'];
  $apellido_p = $_POST['apellido_p'];
  $contrasena = $_POST['contrasena'];
  $lada = $_POST['lada'];
  $telefono = $_POST['telefono'];
  $sede = $_POST['sede'];
  $cupo = $_POST['cupo'];
  $horario = $_POST['horario']; 
  $puesto = $_POST['puesto']; 
  $tipo = $_POST['tipo']; 
  
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
  $query_up_per = "update personal set nombre_personal = '$nombre_personal',apellido_p = '$apellido_m', apellido_m = '$apellido_m' where fk_cupo = 
  (select id_cupo from cupos where fk_sede = '$sede' and cupo = '$cupo'";

echo $query_up_per;
  //ejecucion - inserccion de cupos y telefonos
  //$result_up_per = mysqli_query($conexion, $query_up_per) or die('$result_up_per Error:'.mysqli_error());

  
  mysqli_close($conexion)or die("Error en desconexion");
  
  //echo 'true';
  
?>
