<?php
require_once ('mysql-login.php');
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
//solicitamos las variables
$telefono = $_REQUEST['telefono'];
//generamos la consulta
$sql = "SELECT P.contrasena,
concat(T.fk_lada,T.telefono) as telefono,
P.id_personal,
P.fk_usuario
FROM personal P, telefonos T
WHERE P.fk_telefono = T.id_telefono and
concat(T.fk_lada,T.telefono) = '$telefono'";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if(!$result = mysqli_query($conexion, $sql)) die();
$clientes = array(); //creamos un array
while($row = mysqli_fetch_array($result)) 
{ 
    $id_personal=$row['id_personal'];
    $telefono=$row['telefono'];
    $contrasena=$row['contrasena'];
    $fk_usuario=$row['fk_usuario'];
    
    $clientes[] = array('id_personal'=> $id_personal, 'contrasena'=> $contrasena,'telefono'=> $telefono,'fk_usuario'=>$fk_usuario);
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;    
?>
