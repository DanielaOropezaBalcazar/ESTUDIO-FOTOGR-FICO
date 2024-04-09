<?php
	function Conectarse()
	{//inttroducimos los datos de  host que son "Server", "usuario" y "contraseña" 
		if (!($link=mysqli_connect("localhost","root","1590PPL")))//aca hay que introducir los datos que especifique arriba!!!
		{
			return 0;
		}
		if (!mysqli_select_db($link, "mypicture_bd"))
		{
			return 0;
		}
		return $link;
	}

	//--------------------------

	function alta ($costoEnvio, $fecha, $Dron_idDron)
	{
		$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
				exit();
			}

		// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
        

		$consulta = "INSERT INTO Pedido (`costoEnvio`, `fecha`, `Dron_idDron`) VALUES ('$costoEnvio', '$fecha', '$Dron_idDron');";


		$resultado=mysqli_query($conexion,$consulta);

			//cerramos la conexión con el motor de BD
			mysqli_close($conexion);
	}

	//--------------------------

	function baja ($id)
	{
		$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de baja. Error al conectar.</h1>";
				exit();
			}

		// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
		$consulta = "DELETE FROM Pedido WHERE idPedido = $id";

		echo $consulta . "<BR>";

		$resultado=mysqli_query($conexion,$consulta);

		//echo "Resultado de la operaci&oacute;n: " . $resultado;

			//cerramos la conexión con el motor de BD
			mysqli_close($conexion);

	}

	//--------------------------

	function modificacion ($id, $costoEnvio, $fecha, $Dron_idDron)
	{
		$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
				exit();
			}

		// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.

		/*
		UPDATE `agenda` SET `nombre` = 'pepe3',
						`tel` = '467641_1',
						`direccion` = 'ch 149_1',
						`mail` = 'pepe@host2.com.ar' WHERE `agenda`.`id` =2
		*/

		$consulta = "UPDATE Pedido SET costoEnvio = '$costoEnvio', fecha = '$fecha', Dron_idDron = '$Dron_idDron' WHERE idPedido = $id";


		echo $consulta;

		$resultado=mysqli_query($conexion, $consulta);

			//cerramos la conexión con el motor de BD
			mysqli_close($conexion);
	}

?>