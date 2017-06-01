<?php
  //conexion por MySQL PDO
      require_once 'mysql-login.php';
      try {
        $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        $query = "SELECT * FROM Roles";
        $result = mysql_query($sql_query);
        $rows = array();
        while($r = mysql_fetch_assoc($result)) {
          $rows[] = $r;
        }
        print json_encode($rows); 
        }
        $result = null;
      }
        catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
        ";
        die();
      }
      $con =null;
?>
