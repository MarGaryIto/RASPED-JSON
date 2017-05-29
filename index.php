<?php
//conexion por MySQL PDO
require_once 'mysql-login.php';
  try {
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    print "Conexión exitosa!";
  }
  catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "
    ";
    die();
  }
  $con = null;
?>
