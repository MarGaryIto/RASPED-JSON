<?php
  //se almacenan las variables a insertar
  $cupo = $_POST['cupo'];
  $contrasena = $_POST['contrasena'];

  //llamar mysql-login.php que contiene los datos de la base de datos para conectar
  require_once ('mysql-login.php');

  //ejecucion de conexion o devolucion de error
  $conexion = mysqli_connect($server, $user, $pass,$bd);;
  if (!$conexion) {
    die('Connect Error: '.mysqli_connect_error());
  }

  //estándar de codificación Unicode Transformation 8 bits para compatibilidad ASCII
  mysqli_set_charset($conexion, "utf8");

//encriptar contrasena
$contrasena = md5($contrasena);

//consulta actualizacion de contraseña
$query_act_cont = "update personal set contrasena = '$contrasena' where fk_cupo =
(select id_cupo from cupos where concat(fk_sede,cupo) = '$cupo')";

echo $query_act_cont;

//ejecutar la consulta de actualizacion de contraseña
//$result_act_cont = mysqli_query($conexion, $query_act_cont) or die('result_act_cont Error:'.mysqli_error());
  
  mysqli_close($conexion)or die("Error en desconexion");

  echo "true";
  
?>

