<?php
    // Acá, en base a los datos recibidos (nombre, telefono, direccion, etc), hacemos el alta.
    if ($_POST["accion"] == "realizar_alta") {
        include("../sql.php");

    
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $servicio = $_POST['servicio'];
        $comentario = $_POST['comentario'];
        $precio = floatval($_POST['precio']);

        altaPedido($nombre, $telefono, $servicio, $comentario, $precio);
        echo "success"; // Indicar que el alta fue exitosa
    }
?>