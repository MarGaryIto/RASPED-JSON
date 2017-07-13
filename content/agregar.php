<?php
	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$existencias = $_POST['existencias'];
	$precio_compra = $POST['precio_compra'];
	$precio_venta = $POST['precio_venta'];*/

	require_once ('mysql-login.php');

	$conexion = mysqli_connect($server, $user, $pass,$bd)
		or die("Ha sucedido un error inexperado en la conexion de la base de datos");

	$query1  = "INSERT INTO contacto (nombre, telefono, email, direccion, web) VALUES ('$nombre','$telefono','$email','$direccion','$web')";

	$resultado = mysqli_query($conexion, $query1);

	// Si dio error
	if ($resultado == false) {
		printf("Error: %s\n", mysqli_error($conexion));
		die();
	}
?>
