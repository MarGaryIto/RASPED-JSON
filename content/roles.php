<?php
require_once 'mysql-login.php';
try{
  
  $DBcon = new PDO("mysql:host=$hostname ;dbname=$database ",$username ,$password );
  $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 }catch(PDOException $ex){
  
  die($ex->getMessage());
 }

$query = "SELECT * FROM roles";
 
$stmt = $DBcon->prepare($query);
$stmt->execute();

$userData = array();

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
      $userData['AllRoles'][] = $row;
 
}

echo json_encode($userData);
?>
