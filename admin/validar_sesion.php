<?php


session_start();	

$conexion = mysqli_connect('localhost', 'root', '', 'cinelandia'); 

$usuario = $_POST['Usuario'];  		
$password = $_POST['Password'];		


$consulta = "SELECT nombre, apellido, email, id_usuario, nivel FROM usuario WHERE Usuario='$usuario' AND Password=MD5('$password') LIMIT 1"; 

$datos = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_assoc($datos);

if ($array == NULL) {
	header("Location: error_login.php?login=error");   
} else {

	$_SESSION = $array;


	header("Location: panel_admin.php");
}
?>
