<?php
  require_one 'mysql-login.php';
  $query = "SELECT * FROM Roles";
  $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
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
?>
