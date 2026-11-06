<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "tienda_elf";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");

function esta_logueado() {
    return isset($_SESSION['usuario_id']);
}
?>
