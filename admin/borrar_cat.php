<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>Categoria Eliminada</title>
    <style>
            .cses1 a{
    border-radius: 10px;
    border: rgba(0, 247, 255, 0.652) solid 1px;
    padding: 12px;
    margin-left: 247px;
    }
    .agregar a {
    border-radius: 10px;
    border: rgba(0, 247, 255, 0.652) solid 1px;
    padding: 12px;
    margin-left: 149px;
    }
    .cses a {
    border-radius: 10px;
    border: rgba(0, 247, 255, 0.652) solid 1px;
    margin-left: 149px;
    padding: 12px;
    }
    </style>
</head>
<body>
	
    <div class="formulario">
<?php

if( mysqli_connect("localhost","root","","cinelandia") ){

		$con = mysqli_connect('localhost','root','','cinelandia' );
		if( isset($_GET["cat"]) ){
		$codigo = $_GET["cat"];
		
		$consulta = "DELETE FROM categoria WHERE id_categoria='$codigo'";
		if ( mysqli_query($con, $consulta) ){
		     
			 echo "Categoria eliminada con exito!";		
			
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
<div class="vcc">
<div class="cses1"><a href="panel_admin.php">Volver Al Panel</a></div>
<div class="agregar"><a href="categorias.php">Administrador de categorias</a></div>
<div class="cses"><a href="index.php">Cerrar  Sesion</a></div>
</div>
</body>
</html>