<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "danza_viva";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
else {
    echo "Conexión exitosa a la base de datos.";
}
$conexion->set_charset("utf8");

?>