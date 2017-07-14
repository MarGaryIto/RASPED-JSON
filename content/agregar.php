<?php
	//se almacenan las variables a insertar
	$sede = $_POST['sede'];
	$cupo = $_POST['cupo'];
	$lada = $_POST['lada'];
	$telefono = $_POST['telefono'];
	$nombre_personal = $_POST['nombre_personal'];
	$apellido_m = $_POST['apellido_m'];
	$apellido_p = $_POST['apellido_p'];
	$contrasena = $POST['contrasena'];
	//llamar mysql-login.php que contiene los datos de la base de datos para conectar
	require_once ('mysql-login.php');
	//ejecucion de conexion o devolucion de error
	$conexion = mysqli_connect($server, $user, $pass,$bd);;
	if (!$conexion) {
		die('Connect Error: '.mysqli_connect_error());
	}
	mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
	//consultas - inserccion de cupos y telefonos
	$query_insert_sede = "insert ignore into sedes(id_sede) values ('$sede')";
	$query_insert_cupo = "insert into cupos(fk_sede,cupo) values ('$sede','$cupo')";
	$query_insert_lada = "insert ignore into ladas(id_lada) values ('$lada')";
	$query_insert_telefono = "insert into telefonos(fk_lada,telefono) values ('$lada','$telefono')";
	//ejecucion - inserccion de cupos y telefonos
	$result = mysqli_query($conexion, $query_insert_sede) or die('Error:'.mysqli_error());
	$result = mysqli_query($conexion, $query_insert_cupo) or die('Error:'.mysqli_error());
	$result = mysqli_query($conexion, $query_insert_lada) or die('Error:'.mysqli_error());
	$result = mysqli_query($conexion, $query_insert_telefono) or die('Error:'.mysqli_error());
	//encriptacion md5 de contraseña
	$contrasena = md5($contrasena);
	/*//generamos la consulta
	$sql = "SELECT id_cupo from cupos WHERE fk_sede = '@sede' and cupo = '@cupo'";
	
	if(!$result = mysqli_query($conexion, $sql)) die();
	$clientes = array(); //creamos un array
	while($row = mysqli_fetch_array($result)) 
	{ 
	    $id_personal=$row['id_personal'];
	    $cupo=$row['cupo'];
	    $nombre_personal=$row['nombre_personal'];
	    $apellidos=$row['apellidos'];
	    $telefono=$row['telefono'];
	    $contrasena=$row['contrasena'];
	    $horario=$row['horario'];
	    $puesto=$row['puesto'];
	    $usuario=$row['usuario'];
	    $clientes[] = array('id_personal'=> $id_personal, 'cupo'=> $cupo, 'nombre_personal'=> $nombre_personal, 'apellidos'=>$apellidos, 'telefono'=> $telefono, 'contrasena'=> $contrasena, 'horario'=> $horario, 'puesto'=> $puesto, 'usuario'=> $usuario);
	}
	//realizar la inserccion o devolucion de error*/
	
	mysqli_close($conexion);
	
	echo "inserccion finalizada";
?>
