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
  <script src="procesosAjax/mod_foto.js"></script>

</head>

<body class="bg-light">

  <!-- Navbar -->
    <!-- Navbar -->
    <?php include('header.php'); ?>
  
  <div class="container mt-5">
  <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Modificar Fotografía</h5>
            <form id="formularioModFoto" enctype="multipart/form-data">
              <!-- List box para seleccionar el ID de la foto a modificar -->
              <div class="form-group">
                <label for="selectFoto">Seleccionar Foto</label>
                <select class="form-control" id="selectFoto" name="selectFoto">
                  <!-- Las opciones se cargarán dinámicamente con JavaScript -->
                </select>
              </div>
              <!-- Campos del formulario para modificar los datos -->
              <div class="form-group">
                <label for="nombreMod">Nombre</label>
                <input type="text" class="form-control" id="nombreMod" name="nombreMod" required>
              </div>
              <div class="form-group">
                <label for="precioMod">Precio</label>
                <input type="number" class="form-control" id="precioMod" name="precioMod" required>
              </div>
              <div class="form-group">
                <label for="urlImagenMod">URL de la Imagen</label>
                <input type="text" class="form-control" id="urlImagenMod" name="urlImagenMod" required>
              </div>
              <div class="form-group">
                <label for="descripcionMod">Descripción</label>
                <textarea class="form-control" id="descripcionMod" name="descripcionMod" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Modificar Foto</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
    <a href="fotos.php" class="btn btn-secondary">Agregar Foto</a>
    <a href="modificar_fotos.php" class="btn btn-secondary">Modificar Foto</a>
    <a href="eliminar_fotos.php" class="btn btn-secondary">Eliminar Foto</a>
</div>
</div>

  </div>

</body>

</html>
