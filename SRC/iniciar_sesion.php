<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio Sesion</title>
</head>
<body>
<?php

session_start( );   //CREA UNA SESION O REANUDA LA ACTUAL

$conexion = mysqli_connect('localhost','root','','cinelandia');  //CONECTA A LA BASE

$usuario = $_POST['Usuario'];     //ASIGNA VARIABLE AL DATO USUARIO
$password = $_POST['Password'];	 //ASIGNA VARIABLE AL DATO PASSWORD


$consulta = "SELECT nombre, apellido, email, id_usuario, nivel FROM usuario WHERE Usuario='$usuario' AND Password=MD5('$password') LIMIT 1";  //GENERA LA CONSULTA

$datos = mysqli_query($conexion, $consulta);  //GENERA LA QUERY Y LE ASIGNA UNA VARIABLE
$array = mysqli_fetch_assoc($datos);   // GUARDA LA QUERY EN UN ARRAY

if( $array == NULL ){
	header("Location: error_login.php?login=error");    //SI LOS DATOS NO COINCIDEN ME DEVUELVA UN ERROR DE LOGIN
}else{

	$_SESSION = $array;									//SINO ME GUARDA LOS DATOS EN LA SESION
	

	header("Location: sesion_in.php");
}


?>
</body>
</html>