<?php
include('../sql.php');

if ($_POST['accion'] == 'cargarFotos') {
    // Suponiendo que existe una función llamada obtenerFotos() que retorna todas las fotos
    echo json_encode(obtenerFotos());
} elseif ($_POST['accion'] == 'eliminar' && isset($_POST['id'])) {
    $id = $_POST['id'];
    // Suponiendo que existe una función llamada eliminarFoto() para eliminar la foto
    if(eliminarFoto($id)) {
        echo "Foto eliminada con éxito.";
    } else {
        echo "Error al eliminar la foto.";
    }
}
?>