<?php

require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT PER.id_personal,
concat(CUP.fk_sede,CUP.cupo) as cupo,
PER.nombre_personal,
concat (PER.apellido_p,' ',PER.apellido_m) as apellidos,
concat(TEL.fk_lada,TEL.telefono) as telefono,
PER.contrasena,
HOR.hr_nombre as horario,
PUE.nombre_puesto as puesto,
USU.usuario
FROM personal PER, telefonos TEL, cupos CUP, horarios HOR, puestos PUE,usuarios USU
WHERE PER.fk_cupo = CUP.id_cupo and
PER.fk_telefono = TEL.id_telefono and
PER.fk_horario = HOR.id_horario and
PER.fk_puesto = PUE.id_puesto and
PER.fk_usuario = USU.id_usuario";

mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();
$clientes = array(); //creamos un array
while($row = mysqli_fetch_array($result)) 
{ 
    $id_personal=$row['id_personal'];
    $cupo=$row['cupo'];
    $apellidos=$row['telefono'];
    $contrasena=$row['contrasena'];
    $horario=$row['horario'];
    $puesto=$row['puesto'];
    $usuario=$row['usuario'];

    $clientes[] = array('id_personal'=> $id_personal, 'cupo'=> $cupo, 'telefono'=> $telefono, 'contrasena'=> $contrasena, 'horario'=> $horario, 'puesto'=> $puesto, 'usuario'=> $usuario);
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;    
?>
