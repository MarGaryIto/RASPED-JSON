<?php
	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$existencias = $_POST['existencias'];
	$precio_compra = $POST['precio_compra'];
	$precio_venta = $POST['precio_venta'];
    include ("conexion.php");
    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("examen");
    mysql_query("UPDATE productos SET nombre='$nombre' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET descripcion='$descripcion' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET nombre='$nombre' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET existencias='$existencias' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET precio_compra='$precio_compra' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET precio_venta='$precio_venta' WHERE id_producto='$id'");
    echo '<a href="/examen/index.php">volver</a>'
?>
