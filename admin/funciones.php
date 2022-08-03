<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php

function listarEnOptions($tabla,$campoVisible,$id){ 

	if( mysqli_connect("localhost","root","", "cinelandia") ){

	$con = mysqli_connect('localhost','root','','cinelandia' );
		
		$consulta = "SELECT * FROM $tabla";
		if ( $resultado = mysqli_query($con, $consulta) ){

			echo '<select name="'.$tabla.'">';
			
			while( $fila = mysqli_fetch_array($resultado) ){
				echo '<option value="'.$fila["$id"].'">'.$fila["$campoVisible"]."</option>\n";
			}
			
			echo "</select>";
	
		} else {
			echo "La consulta tiene errores";
		}

} else {
	echo "NO tenes permiso de usar MySQL";
}
}
?>
</body>
</html>