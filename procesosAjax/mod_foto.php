<?php
include('../sql.php');

if ($_POST['accion'] == 'cargarFotos') {
    echo json_encode(obtenerFotos());
} elseif ($_POST['accion'] == 'cargarDatos' && isset($_POST['id'])) {
    
    echo json_encode(obtenerDetallesFoto($_POST['id']));
} elseif ($_POST['accion'] == 'actualizarFoto' && isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['urlImagen'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $urlImagen = $_POST['urlImagen'];
    echo actualizarFoto($id, $nombre, $descripcion, $precio, $urlImagen);
}

?>