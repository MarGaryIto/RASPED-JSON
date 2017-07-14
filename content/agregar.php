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

	//estándar de codificación Unicode Transformation 8 bits para compatibilidad ASCII
	mysqli_set_charset($conexion, "utf8");

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

	//query para consulta de fk_cupo y fk_telefono
	$query_select_fk_cupo = "SELECT id_cupo from cupos WHERE fk_sede = $sede and cupo = $cupo";
	$query_select_fk_telefono = "SELECT id_telefono from telefonos WHERE fk_lada=$lada and telefono=$telefono";
	
	//ejecucion de query para consulta de fk_cupo y fk_telefono o arrojo de error
	if(!$result_fk_cupo = mysqli_query($conexion, $query_select_fk_cupo)) die('Error:'.mysqli_error());
	if(!$result_fk_telefono = mysqli_query($conexion, $query_select_fk_telefono)) die('Error:'.mysqli_error());

	//captura de fk_cupo mediante ciclo while
	while($row = mysqli_fetch_array($result_fk_cupo)) { 
	    $fk_cupo=$row['id_cupo'];
	}
	//captura de fk_telefono mediante ciclo while
	while($row = mysqli_fetch_array($result_fk_telefono)) { 
	    $fk_telefono=$row['id_telefono'];
	}
	
	//query para la inserccion de usuario
	$query_insert_personal = "insert into 
	personal(fk_cupo,nombre_personal,apellido_m,apellido_p,
	fk_telefono,contrasena)
	values($fk_cupo,'$nombre_personal','$apellido_m','$apellido_p',
	$fk_telefono,'$contrasena')";

	$result = mysqli_query($conexion, $query_insert_personal) or die('Error:'.mysqli_error());
	
	mysqli_close($conexion)or die("Error en desconeccion");
	
	echo "adiccion exitosa";
	
?>
