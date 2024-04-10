<?php
include('../sql.php'); // Asegúrate de que la ruta sea correcta

// Verifica si los campos requeridos están presentes
if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['descripcion']) && isset($_POST['urlImagen'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $urlImagen = $_POST['urlImagen']; // La URL de la imagen
    
    // Intenta guardar los datos en la base de datos
    echo agregarFoto($nombre, $descripcion, $precio, $urlImagen);
} else {
    echo "Todos los campos son requeridos.";
}
?>