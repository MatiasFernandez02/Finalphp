<?php

$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "producto");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
