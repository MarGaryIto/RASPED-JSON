<?php
/**
 * Obtiene todas las metas de la base de datos
 */

require 'roles.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    $roles = Roles::getAll();

    if ($roles) {

        $datos["id_rol"] = 1;
        $datos["nombre_rol"] = $roles;

        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
}
?>
