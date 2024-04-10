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
  <script src="procesosAjax/registrofoto.js"></script>

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
            <h5 class="card-title text-center">Agregar Nueva Fotografía</h5>
            <!-- Asegúrate de que el ID del formulario coincida con el selector en registrofoto.js -->
            <form id="formularioFoto" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
              </div>
              <div class="form-group">
                <label for="archivo">Archivo de la Imagen</label>
                <input type="text" class="form-control" id="urlImagen" name="urlImagen" placeholder="https://example.com/image.jpg" required>
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Agregar Foto</button>
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

</body>

</html>
