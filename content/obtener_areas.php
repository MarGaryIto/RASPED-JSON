<?php
      //conexion por MySQL PDO
      require_once 'content/mysql-login.php';
      try {
        $DBcon = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print "Conexión exitosa!";
        $query = "SELECT * FROM areas";
 
        $stmt = $DBcon->prepare($query);
        $stmt->execute();
        
        $userData = array();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
              $userData['id_area'][] = $row;
        }
        echo json_encode($userData);
      }
        catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
        ";
        die();
      }
      $con =null;
?>
