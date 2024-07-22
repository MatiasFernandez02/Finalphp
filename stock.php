<?php
// Configuración de conexión
include 'config.php';

// Inicializar array de productos
$productos = [];

// Obtener productos de la base de datos
$query = "SELECT nombre, descripcion, precio, imagen FROM productos";
$result = $conexion->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
} else {
    $productos = [];
}

$conexion->close();
?>
