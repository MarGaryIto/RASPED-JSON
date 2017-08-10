<?php
	//se almacenan las variables a insertar
	
	$puesto = $_POST['puesto'];
	
	//llamar mysql-login.php que contiene los datos de la base de datos para conectar
	require_once ('mysql-login.php');

	//ejecucion de conexion o devolucion de error
	$conexion = mysqli_connect($server, $user, $pass,$bd);;
	if (!$conexion) {
		die('Connect Error: '.mysqli_connect_error());
	}

	//estándar de codificación Unicode Transformation 8 bits para compatibilidad ASCII
	mysqli_set_charset($conexion, "utf8");

	//consultas - inserccion de puesto
	$query_insert_puesto = "insert ignore into puestos(nombre_puesto) values ('$puesto')";

	//ejecucion - inserccion de cupos y telefonos
	$result_insert_puesto = mysqli_query($conexion, $query_insert_puesto) or die('result_insert_puesto Error:'.mysqli_error());
	
	mysqli_close($conexion)or die("Error en desconeccion");
	
	echo 'true';
	
?>
