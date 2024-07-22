<?php
function imageToBase64($imagePath) {
    $imageData = file_get_contents($imagePath);
    $base64 = base64_encode($imageData);
    $mimeType = mime_content_type($imagePath);
    return 'data:' . $mimeType . ';base64,' . $base64;
}

$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "producto");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);
$categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);

$imagen = $_FILES['imagen']['tmp_name']; // Obtiene el archivo temporal de la imagen

$imagenBase64 = imageToBase64($imagen);

$sql = "INSERT INTO productos (nombre, descripcion, precio, categoria, imagen) 
        VALUES ('$nombre', '$descripcion', '$precio', '$categoria', '$imagenBase64')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo producto agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}   

$conexion->close();
?>
