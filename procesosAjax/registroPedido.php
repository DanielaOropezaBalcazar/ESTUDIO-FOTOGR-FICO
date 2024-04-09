<?php
    // Acá, en base a los datos recibidos (nombre, telefono, direccion, etc), hacemos el alta.
    if ($_POST["accion"] == "realizar_alta") {
        include("sql.php");

        
        

        alta($costoE, $fecha, $dron);
        header("Location: pedidos.php");
    }
?>