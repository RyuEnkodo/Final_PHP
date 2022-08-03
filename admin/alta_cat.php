<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="CSS/estilos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
	<title>Creacion Categoria</title>
</head>

<body>

	<div class="formulario">
		<?php

		if (mysqli_connect("localhost", "root", "", "cinelandia")) {

			$con = mysqli_connect('localhost', 'root', '', 'cinelandia');

			if (isset($_POST["NombreServicio"])) {
				$nombre = $_POST["NombreServicio"];

				$consulta = "INSERT INTO categoria (nombre) VALUES ('$nombre')";

				if (mysqli_query($con, $consulta)) {

					echo "Servicio creado con exito!";
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