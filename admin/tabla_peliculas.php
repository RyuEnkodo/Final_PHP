
<?php

if( mysqli_connect("localhost","root","","cinelandia") ){

	$con = mysqli_connect('localhost','root','','cinelandia' );

		$consulta = "SELECT id_pelicula, titulo FROM pelicula";
		if ( $resultado = mysqli_query($con, $consulta) ){

			while( $fila = mysqli_fetch_array($resultado) ){
				echo "<tr><td>".$fila["titulo"]."</td><td><a href=\"modificar_peli.php?tra=".$fila["id_pelicula"]."\">MODIFICAR</a></td><td><a href=\"borrar_peli.php?tra=".$fila["id_pelicula"]."\">BORRAR</a></td></tr>\n";
			}

		} else {
			echo "La consulta tiene errores";
		}

} else {
	echo "NO tenes permiso de usar MySQL";
}

?>

