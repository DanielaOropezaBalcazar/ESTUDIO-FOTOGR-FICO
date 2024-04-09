<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudio Fotografico</title>
  <!-- Agregar los enlaces a Bootstrap CSS y JavaScript -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilo para el contenedor de la imagen de fondo */
    .background-image {
      background-image: url('Images/Pedidos/Montanas.jpeg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
      background-attachment: scroll;
      color: #ffffff;
    }
    
    /* Estilo para el panel de inicio de sesión */
    .login-panel {
      background-color: rgba(255, 255, 255, 0); 
      border: 2px solid #ffffff; /* Borde blanco */
      border-radius: 10px;
      padding: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      max-width: 400px;
      text-align: center;
      color: #ffffff;
    }
    .login-panel input[type="tel"],
    .login-panel input[type="text"],
    .login-panel textarea[type="text"] {
      background-color: rgba(255, 255, 255, 0); 
      border: 1px solid #ffffff; 
      border-radius: 15px; 
      color: #ffffff; 
      margin-bottom: 20px; 
      padding: 10px; 
    }
    /* Estilo para el placeholder */
    .login-panel input[type="tel"]::placeholder,
    .login-panel input[type="text"]::placeholder,
    .login-panel textarea::placeholder {
      color: #ffffff; /* Color del placeholder blanco */
    }
    /* Estilo para el botón */
    .login-panel button {
      background-color: #ffffff; /* Fondo blanco */
      color: #000000; /* Texto negro */
      border: none; /* Sin borde */
      border-radius: 15px; /* Bordes más redondeados */
      padding: 10px 20px; /* Espaciado interno */
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <?php include('header.php'); ?>

   <!-- Contenedor de la imagen de fondo con el panel de inicio de sesión -->
   <div class="background-image">
    <div class="login-panel">
      <!-- Aquí puedes colocar el formulario de pedido -->
      <h3>Realizar Pedido</h3>
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="tel" class="form-control" id="telefono" placeholder="Teléfono">
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="servicio" placeholder="Servicio">
        </div>
        <div class="form-group">
          <textarea type="text" class="form-control" id="comentario" rows="3" placeholder="Comentario"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Pedido</button>
      </form>
    </div>
  </div>

  <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
