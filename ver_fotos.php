<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudio Fotográfico - Agregar Fotos</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="procesosAjax/verificarSesion.js"></script>
</head>

<body class="bg-light">

    <?php include('header.php'); 
     include('sql.php'); // Incluye sql.php para usar obtenerTodasLasFotos()
    $fotos = obtenerTodasLasFotos();
?>
  
  <div class="container mt-5">
  <div class="container mt-5">
    <div class="row">
        <?php 
        if(count($fotos) > 0){
            foreach ($fotos as $row){
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . htmlspecialchars($row['columna_imagen']) . '" class="card-img-top" alt="Imagen de la Foto">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($row['nombre']) . '</h5>';
                echo '<p class="card-text">' . htmlspecialchars($row['descripcion']) . '</p>';
                echo '<p class="card-text">Precio: $' . htmlspecialchars($row['precio']) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="col-md-12"><p>No hay fotos disponibles en este momento.</p></div>';
        }
        ?>
    </div>
</div>
    
    <div class="text-center mt-4">
    <a href="fotos.php" class="btn btn-secondary">Agregar Foto</a>
    <a href="modificar_fotos.php" class="btn btn-secondary">Modificar Foto</a>
    <a href="eliminar_fotos.php" class="btn btn-secondary">Eliminar Foto</a>
    <a href="ver_fotos.php" class="btn btn-secondary">Ver fotos</a>
</div>
</div>

  </div>

</body>

</html>
