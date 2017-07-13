<?php
	//se almacenan las variables a insertar
	$nombre_personal = $_POST['nombre_personal'];
	$apellido_m = $_POST['apellido_m'];
	$apellido_p = $_POST['apellido_p'];
	$contrasena = $POST['contrasena'];

	//encriptacion md5 de contraseña
	$contrasena = md5($contrasena);

	//llamar mysql-login.php que contiene los datos de la base de datos para conectar
	require_once ('mysql-login.php');

	//ejecucion de conexion o devolucion de error
	$conexion = mysqli_connect($server, $user, $pass,$bd);;
	if (!$conexion) {
		die('Connect Error: '.mysqli_connect_error());
	}
	
	//generacion de consulta para insertar datos
	$query  = "insert into personal(nombre_personal,apellido_m,apellido_p,contrasena) values('$nombre_personal','$apellido_m','$apellido_p','$contrasena')";

	//realizar la inserccion o devolucion de error
	$result = mysqli_query($conexion, $query) or die('Error:'.mysqli_error());

	mysqli_close($conexion);
	
	echo "inserccion finalizada";
?>
