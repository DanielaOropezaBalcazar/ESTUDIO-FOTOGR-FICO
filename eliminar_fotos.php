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
  <script src="procesosAjax/elim_foto.js"></script>

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
            <h5 class="card-title text-center">Eliminar Fotografía</h5>
            <form id="formularioEliminarFoto">
              <div class="form-group">
                <label for="selectFotoEliminar">Seleccionar Foto para Eliminar</label>
                <select class="form-control" id="selectFotoEliminar" name="selectFotoEliminar">
                  
                </select>
              </div>
              <button type="submit" class="btn btn-danger">Eliminar Foto</button>
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
