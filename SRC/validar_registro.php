<!DOCTYPE html>
<html lang="en">

<?php
//CONECTA A LA BASE
$conexion = mysqli_connect('localhost','root','','cinelandia');   

//ASIGNO UNA VARIABLE A CADA DATO RECIBIDO DEL POST
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$usuario = $_POST['Usuario'];
$password = $_POST['Password'];
	
//SETEA EN LA TABLA USUARIO LOS DATOS REQUERIDOS EN EL FORM
//MD5, HASHEA LA PASS
$seteo =<<<ALGO
	INSERT INTO 
		usuario 
	SET 
		nombre='$nombre',
		apellido='$apellido',
		email='$email', 
        usuario='$usuario',
		password=MD5('$password'),
		nivel='usuario',
		fecha_registro=NOW( )
ALGO;

//TRANSFORMA LA CONEXION Y EL SETEO EN UN ARRAY
mysqli_query($conexion, $seteo);
header("Location: registro_correcto.php?alta=ok");
?>

</html>