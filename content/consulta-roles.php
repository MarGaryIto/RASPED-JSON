<?php
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
?>
