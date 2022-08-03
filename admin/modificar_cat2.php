<!doctype html>
<html>

<head>
	<link rel="stylesheet" href="CSS/estilos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
	<title>Modifica una categoria</title>
</head>

<body>
	<h1>Proceso finalizado</h1>

	<div class="formulario">

		<?php

		if (mysqli_connect("localhost", "root", "", "cinelandia")) {

			$con = mysqli_connect('localhost', 'root', '', 'cinelandia');


			if (isset($_POST["Nombre"]) and isset($_POST["idCat"])) {

				$nombre = $_POST["Nombre"];
				$codigo = $_POST["idCat"];

				$consulta = "UPDATE categoria SET Nombre='$nombre' WHERE id_categoria='$codigo'";

				if (mysqli_query($con, $consulta)) {

					echo "Servicio Modificado Exitosamente!";
				} else {

					echo "La consulta tiene errores";
				}
			} else {

				echo '<p><a href="index.php">Elija una categoria</a></p>';
			}
		} else {
			echo "NO tenes permiso de usar MySQL";
		}

		?>
	</div>

	<div class="volver">
		<a href="categorias.php">VOLVER AL PANEL</a>

	</div>
</body>

</html>