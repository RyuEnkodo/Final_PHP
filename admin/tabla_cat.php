<?php

		if (mysqli_connect("localhost", "root", "", 'cinelandia')) {			
	
			$con = mysqli_connect('localhost', 'root', '', 'cinelandia');    
		
			$consulta = "SELECT id_categoria, nombre FROM categoria";					
			if ($resultado = mysqli_query($con, $consulta)) {

				while ($fila = mysqli_fetch_array($resultado)) {
					echo "<tr><td>" . $fila["nombre"] . "</td><td><a href=\"modificar_cat.php?cat=" . $fila["id_categoria"] . "\">MODIFICAR</a></td><td><a href=\"borrar_cat.php?cat=" . $fila["id_categoria"] . "\">BORRAR</a></td></tr>\n";
				}
			} else {
				echo "La consulta tiene errores";
			}
		} else {
			echo "NO tenes permiso de usar MySQL";
		}
		
?>




