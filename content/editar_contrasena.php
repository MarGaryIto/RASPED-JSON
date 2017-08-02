<?php
  //se almacenan las variables a insertar
  $contrasena = $_POST['contrasena'];
  $id_personal = $_POST['id_personal'];
  

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
  $query_update_pass= "update personal set contrasena = '$contrasena' where id_personal = '$id_personal'";

  //ejecucion - inserccion de cupos y telefonos
  $result_update_pass = mysqli_query($conexion, $query_update_pass) or die('update_pass Error:'.mysqli_error());

  //cerrar conexion
  mysqli_close($conexion)or die("Error en desconexion");

  echo "true";
  
?>
