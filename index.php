<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudio Fotografico</title>
  <!-- Agregar los enlaces a Bootstrap CSS y JavaScript -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!--Fuentes de Google-->
    <!--Fuente OVerlock-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!--Fuente Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <style>
        body {
            background: #FFFFFF;
            color: #000000;
        }
        
        table {
            border-collapse: collapse;
            border-color: #EFEFEF;
            border: none;
            position: relative;
            text-align: center;
            color: white;
        }

        td, th {
            border: 1px solid #dddddd; /* Establece un borde para las celdas */
            text-align: left;
            margin: 500px; 
        }

        .banner{
            position: absolute;
            color: #000000;
            background-color: #FFFFFF;
            width: 100%;
            padding: 10px 0;
        }

        a{
            font-family: "Overlock", sans-serif;
            font-size: 20px;
            color: #000000;
        }
        .contenedor {
            position: relative;
            text-align: center;
            color: white; /* Color del texto */
        }
        
        .imagen {
            width: 100%; /* Ajustar al ancho del contenedor */
            height: auto; /* Para mantener la relacion de aspecto de la imagen */
        }
  
        .texto-encima {
            position: absolute;
            top: 50%; /* Colocar el texto en el centro vertical */
            left: 50%; /* Colocar el texto en el centro horizontal */
            transform: translate(-50%, -50%); /* Centrar el texto */
            font-size: 100px;
            font-family: "Roboto", sans-serif;
            font-weight: 900;
        }

        .texto-encima3 {
            position: absolute;
            top: 50%; /* Colocar el texto en el centro vertical */
            left: 50%; /* Colocar el texto en el centro horizontal */
            transform: translate(-50%, -50%); /* Centrar el texto */
            font-size: 20px;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
        }

        .superpuesto {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Color negro semi-transparente */
        }
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

    </style>
</head>
<body>

  <!-- Navbar -->
  <?php include('header.php'); ?>
  <div class="login-panel">
  <table>
    <td>
        <div class="contenedor">
            <div class="superpuesto"></div>
            <img src="Imagenes/Home/Animas.jpeg" class="imagen">
            <h1 class="texto-encima">Bolivia</h1>
        </div>
    </td>
    
    <td>
        <div class="contenedor">
            <div class="superpuesto"></div>
            <img src="Imagenes/Home/SalarA.jpeg" class="imagen">
            <h3 class="texto-encima3">En My Picture capturamos tus mejores<br>
             momentos. Vis&iacute;tanos y comparte tus recuerdos con el mundo!</h3>
        </div>
    </td>
    </table>
    </div>
  <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
