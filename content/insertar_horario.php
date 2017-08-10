<?php
  //se almacenan las variables a insertar
  $hr_nombre = $_POST['hr_nombre'];
  $hr_entrada = $_POST['hr_entrada'];
  $hr_comida_i = $_POST['hr_comida_i'];
  $hr_comida_f = $_POST['hr_comida_f'];
  $hr_salida = $_POST['hr_salida'];
  $tolerancia = $_POST['tolerancia'];
  

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
  $query_insert = "insert ignore into horarios(hr_nombre,hr_entrada,hr_comida_i,hr_comida_f,hr_salida,tolerancia)
  values ('$hr_nombre','$hr_entrada','$hr_comida_i','$hr_comida_f','$hr_salida','$tolerancia')";

  //ejecucion - inserccion de cupos y telefonos
  $result_insert = mysqli_query($conexion, $query_insert) or die('result_insert Error:'.mysqli_error());
  
  mysqli_close($conexion)or die("Error en desconexion");

  echo "true";
  
?>

