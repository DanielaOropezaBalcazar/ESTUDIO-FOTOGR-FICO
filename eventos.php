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
            font-family: "Inria Serif", serif;
            font-weight: 700;
            font-style: normal;
            font-size: 70px;

        }

        p{
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
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
            width: 484px;
            height: 600px;
        }

        #tdBodas {
            border: 1px solid #dddddd; /* Establece un borde para las celdas */
            text-align: left;
            margin: 500px; 
            width: 484px;
            background-color: #D2E1ED;
        }

        #tdGrads {
            border: 1px solid #dddddd; /* Establece un borde para las celdas */
            text-align: left;
            margin: 500px; 
            width: 484px;
            background-color: #DFCCB5;
        }

        #td15 {
            border: 1px solid #dddddd; /* Establece un borde para las celdas */
            text-align: left;
            margin: 500px; 
            width: 484px;
            background-color: #F5D9E6;
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
            color: black; /* Color del texto */
        }
      

    </style>
</head>
<body>
<?php include('header.php'); ?>
    <hr>
    <center>
        <table>
            <tr>
                <td>
                    <div class="contenedor">
                        <img src="Images/Eventos/Boda1.jpg">
                    </div>
                </td>

                <td id="tdBodas">
                    <div class="contenedor">
                        <h1>Bodas</h1>
                        <p>Disfruta de tu d&iacute;a especial y<br>
                        captura cada emoci&oacute;n vivida</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td id="tdGrads">
                    <div class="contenedor">
                        <h1>Graduaciones</h1>
                        <p>Comparte cada logro a lo largo de<br> 
                        tu vida junto con My Picture </p>
                    </div>
                </td>

                <td>
                    <div class="contenedor">
                        <img src="Images/Eventos/Graduacion1.jpg">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="contenedor">
                        <img src="Images/Eventos/15.jpg">
                    </div>
                </td>

                <td id="td15">
                    <div class="contenedor">
                    <h1>15 a&ntilde;os</h1>
                        <p>Protagoniza tus mejores<br> 
                        momentos  y explora tu creatividad</p>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
