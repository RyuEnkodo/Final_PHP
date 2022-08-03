<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacar Admin</title>
</head>

<body>

    <?php
    $id = $_GET['id'];

    $cnx = mysqli_connect('localhost', 'root', '', 'cinelandia');


    $c = "UPDATE usuario SET nivel='usuario' WHERE id_usuario='$id'";

    mysqli_query($cnx, $c);
    header("Location: administrar_usuarios.php");

    ?>

</body>

</html>