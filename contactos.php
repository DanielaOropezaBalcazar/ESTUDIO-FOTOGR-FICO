<!DOCTYPE html>
<html lang="es">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    <!--Fuentes de Google-->
    <!--Fuente OVerlock-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!--Fuente Roboto-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Inria Serif-->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">


    <style>
        body {
            background: #FFFFFF;
            color: #000000;
        }

        h1{
            color: #000000;
            font-family: "Century", sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 70px;

        }

        p{
            font-family: "Gill Sans MT", sans-serif;
            font-weight: 300;
            font-style: normal;
            font-size: 30px;
        }
        
        table {
            border-collapse: collapse;
            border-color: #FFFFFF;
            border: none;
            position: relative;
            text-align: center;
            color: white;
        }

        td, th {
            border: 1px solid #FFFFFF; /* Establece un borde para las celdas */
            text-align: left;
            margin: 400px; 
            width: 600;
            height: 500px;
        }


        #tdGrads {
            border: 1px solid #FFFFFF; /* Establece un borde para las celdas */
            text-align: left;
            margin: 500px; 
            width: 484px;
            background-color: #DFCCB5;
        }

        #contact {
            border: 1px solid #dddddd; /* Establece un borde para las celdas */
            text-align: left;
            margin: 500px; 
            width: 484px;
            background-color: #e2e2e2;
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
            color: black;
        }   
        
        #footer {
            position: fixed;
            bottom: 0;
            color: #000000;
            background-color: #05141f;
            text-align: center;
            width: 100%;
            padding: 10px 0;
        }

    </style>
</head>
<body>
<?php include('header.php'); ?>
    <hr>
    <center>
        <table>
            <tr>
                <td id="contact">
                    <div class="contenedor">
                    <h1>Contáctanos</h1><br>
                        <p>Nombre: Mario Cazas<br>
                        Teléfono: 7896651<br> 
                        Correo: Mcazas@mypicture.com</p>
                    </div>
                </td>
                <td>
                    <div class="contenedor">
                        <img src="Images/Contactos/Mapa.png">
                    </div>
                </td>
            </tr>
        </table>
            <div id="footer">
                <img src="Images/Contactos/Redes.png"> 
            </div>
    </center>
</body>
</html>

