<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
  <?php require_once("_header.php") ?>
  <title>Categorias</title>
</head>
<body>

<div id="menu">
	
	<?php

	if (mysqli_connect('localhost', 'root', '', 'cinelandia')) {

		$con = mysqli_connect('localhost', 'root', '', 'cinelandia');
		
		$consulta = "SELECT id_categoria, nombre FROM categoria";

		if ($resultado = mysqli_query($con, $consulta)) {


			echo '<ul id="menu">' . "\n";
			
			while ($fila = mysqli_fetch_array($resultado)) {
				echo "<li>
				<a href='portada.php?cat=" . $fila["id_categoria"] . "'>" . $fila["nombre"] . "</a>
				</li>\n";  //FILA HACE REFERENCIA A LA COLUMNA DE LA BDD
			}
			echo "</ul>";
		}
	} else {
		echo "NO tenes permiso de usar MySQL";
	}
	?>
	</div>
</body>
</html>