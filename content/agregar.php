<?php
	//se almacenan las variables a insertar
	$nombre_personal = $_POST['nombre_personal'];
	$apellido_m = $_POST['apellido_m'];
	$apellido_p = $_POST['apellido_p'];
	$contrasena = $POST['contrasena'];

	//encriptacion md5 de contraseña

	//uso de datos 
	require_once ('mysql-login.php');

	//ejecucion de conexion o devolucion de error
	$conexion = mysqli_connect($server, $user, $pass,$bd)
		or die("Ha sucedido un error inexperado en la conexion de la base de datos");

	//generacion de consulta para insertar datos
	$query  = "insert into personal(nombre_personal,apellido_m,apellido_p,contrasena)
	values('$nombre_personal','$apellido_m','$apellido_p','$contrasena');

	//obtencion del resultado
	$resultado = mysqli_query($conexion, $query);

	//evaluacion del resultado y devolucion de error en caso de serlo
	if ($resultado == false) {
		printf("Error: %s\n", mysqli_error($conexion));
		die();
	}
	
	echo "inserccion finalizada";
?>
