<?php
  //conexion MySQL por PDO
  
  //peticion de datos de logg
  require_once 'mysql-login.php';
  
  try {
    //intento de conexion on los datos de logg
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    print "Conexión exitosa!";
  }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "";
    die();
  }
  $con =null;
?>
