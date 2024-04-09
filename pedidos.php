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

    .background-image::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      /* Cambia el último valor para ajustar la opacidad */
    }

    /* Estilo para el panel de inicio de sesión */
    .login-panel {
      background-color: rgba(255, 255, 255, 0);
      border: 2px solid #ffffff;
      /* Borde blanco */
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

    .login-panel select,
    .login-panel select:focus {
      background-color: rgba(255, 255, 255, 0);
      border: 1px solid #ffffff;
      border-radius: 15px;
      color: #ffffff;
      margin-bottom: 20px;
      padding: 5px;
      width: 100%;
      /* Ajusta el ancho según tus necesidades */
    }

    .login-panel select option {
      background-color: rgba(0, 0, 0, 1);
      /* Color de fondo semitransparente */
      color: #ffffff;
      /* Color del texto */
    }

    /* Estilo para el placeholder */
    .login-panel input[type="tel"]::placeholder,
    .login-panel input[type="text"]::placeholder,
    .login-panel textarea::placeholder {
      color: #ffffff;
      /* Color del placeholder blanco */
    }

    /* Estilo para el botón */
    .login-panel button {
      background-color: #ffffff;
      /* Fondo blanco */
      color: #000000;
      /* Texto negro */
      border: none;
      /* Sin borde */
      border-radius: 15px;
      /* Bordes más redondeados */
      padding: 10px 20px;
      /* Espaciado interno */
    }

    /* Estilo para el botón */
    .login-panel input[type="button"] {
      background-color: #ffffff;
      color: #000000;
      border: none;
      border-radius: 15px;
      padding: 10px 20px;
    }

    /* Estilo para el botón cuando se presiona */
    .login-panel input[type="button"].btn-primary:active {
      background-color: #000000;
      border-color: #fff;
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
      <form method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" name="telefono">
            </div>
          </div>
        </div>
        <div class="form-group">
          <!-- Cambiamos el input por un select -->
          <select class="form-control" id="servicio" name="servicio" onChange="cambiarImagen()">
            <option value="">Selecciona un servicio</option>
            <option value="Boda">Boda</option>
            <option value="Graduacion">Graduacion</option>
            <option value="15Años">15 Años</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>

        <!-- Ingresar Precio segun boda Graduacion 15Anios -->
        <input type="text" class="form-control" id="precio" placeholder="Precio $us" readonly>

        <div class="form-group">
          <textarea type="text" class="form-control" id="comentario" rows="3" placeholder="Comentario"></textarea>
        </div>
        <!-- Mostrar imagen de servicio seleccionado -->
        <center>
          <img id="imagen-servicio" src="" alt="Imagen del servicio" style="max-width: 100%; height: 200px; display: none;">
        </center>
        <br>

        <input type="button" class="btn btn-primary" href="javascript:;" onclick="RegistroPedido()" value="Enviar Pedido">
      </form>

      <div id="resultado"></div>

    </div>
  </div>
  <script>
    function cambiarImagen() {
      var servicioSeleccionado = document.getElementById("servicio").value;
      var imagen = document.getElementById("imagen-servicio");
      var precio = document.getElementById("precio");

      // Ruta de las imágenes y precios para cada opción seleccionada
      var opciones = {
        "Boda": {
          imagen: "Images/Eventos/Boda.jpeg",
          precio: "700"
        },
        "Graduacion": {
          imagen: "Images/Eventos/Graduacion.jpeg",
          precio: "500"
        },
        "15Años": {
          imagen: "Images/Eventos/15 anios.jpeg",
          precio: "300"
        }
      };

      // Actualizar la imagen y el precio correspondiente a la opción seleccionada
      if (opciones.hasOwnProperty(servicioSeleccionado)) {
        imagen.src = opciones[servicioSeleccionado].imagen;
        imagen.style.display = "block";
        precio.value = opciones[servicioSeleccionado].precio;
      } else {
        imagen.style.display = "none";
        precio.value = ""; // Limpiar el campo de precio si no hay ninguna opción seleccionada
      }
    }

    function RegistroPedido() {
      var name = document.getElementById("nombre").value;
      var phone = document.getElementById("telefono").value;
      var service = document.getElementById("servicio").value;
      var comment = document.getElementById("comentario").value;
      var price = document.getElementById("precio").value; // Recuperar el precio

      console.log(name);
      console.log(phone);
      console.log(service);
      console.log(comment);
      console.log(price); // Mostrar el precio en la consola para verificar

      var parametros = {
        "nombre": name,
        "telefono": phone,
        "servicio": service,
        "comentario": comment,
        "precio": price,
        "accion": "realizar_alta"
      };

      $.ajax({
        data: parametros,
        url: 'procesosAjax/registroPedido.php',
        type: 'post',
        beforeSend: function() {
          $("#resultado").html("Procesando, espere por favor");
        },
        success: function(response) {
          // Verificar si la respuesta indica un inicio de sesión exitoso
          if (response.trim() === "success") {
            window.location.href = "pedidos.php"; // Redirigir al usuario
          } else {
            alert("No se pudo realizar el pedido. Inténtelo de nuevo.")
            $("#resultado").html(response); // Mostrar mensaje de error
          }
        }
      });
    }
  </script>

  <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>