<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudio Fotografico</title>
  <!-- Agregar los enlaces a Bootstrap CSS y JavaScript -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style>
    /* Estilo para el contenedor de la imagen de fondo */
    .background-image {
      background-image: url('Images/InicioSesion/paisaje1.jpeg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
    }
    /* Estilo para el panel de inicio de sesión */
    .login-panel {
      background-color: rgba(255, 255, 255, 0); /* Fondo transparente */
      border: 2px solid #ffffff; /* Borde blanco */
      border-radius: 10px;
      padding: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      max-width: 400px; /* Ajusta el ancho según tu preferencia */
      text-align: center;
      color: #ffffff;

    }
    .login-panel input[type="text"],
    .login-panel input[type="password"] {
      background-color: transparent; /* Fondo transparente */
      border: 1px solid #ffffff; /* Borde blanco */
      border-radius: 15px; /* Bordes más redondeados */
      color: #ffffff; /* Texto blanco */
      margin-bottom: 20px; /* Espaciado inferior */
      padding: 10px; /* Espaciado interno */
    }
    /* Estilo para el placeholder */
    .login-panel input[type="text"]::placeholder,
    .login-panel input[type="password"]::placeholder {
      color: #ffffff; /* Color del placeholder blanco */
    }
    /* Estilo para el botón */
    .login-panel input[type="button"] {
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
      <!-- Aquí puedes colocar el formulario de inicio de sesión -->
      <h3>Iniciar Sesión</h3>
      <form method="POST">
        <div class="form-group">
          <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" name="username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
        </div>
        <input type="button" class="btn btn-primary" href="javascript:;" onclick="Login()" value="Iniciar Sesión">
      </form>
    </div>
  </div>
  <div id="resultado"></div>

  <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script>
function Login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    console.log(username);
    console.log(password);

    var parametros = {"username": username, "password": password};

    $.ajax({
        data: parametros,
        url: 'procesosAjax/procesoLogin.php',
        type: 'post',
        beforeSend: function () {
            $("#resultado").html("Procesando, espere por favor");
        },
        success: function (response) {
            // Verificar si la respuesta indica un inicio de sesión exitoso
            if(response.trim() === "success") {
                window.location.href = "pedidos.php"; // Redirigir al usuario
            } else { 
                alert("Usuario o contraseña incorrectos")
                $("#resultado").html(response); // Mostrar mensaje de error
            }
        }
    });
}

function validacionPassword() {
    var password = document.getElementById("password").value;

    if (password.length < 8) {
        alert("Contraseña muy corta, debe tener al menos 8 caracteres");
        return false;
    }
}
</script>