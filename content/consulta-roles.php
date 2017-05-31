<?php
  //conexion por MySQL PDO
      require_once 'mysql-login.php';
      try {
        $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        $query = "SELECT * FROM Roles";
        print("<table>");
        $resultado = $con->query($query); 
        foreach ( $resultado as $rows) { 
          print("<tr>");
          print("<td>".$rows["id_rol"]."</td>");
          print("<td>".$rows["nombre_rol"]."</td>");
          print("</tr>"); 
        }
        print("</table>");
        $resultado =null;
      }
        catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
        ";
        die();
      }
      $con =null;
?>
