<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Usuarios</title>
</head>

<body>

    <?php

    if (mysqli_connect("localhost", "root", "", 'cinelandia')) {

        $con = mysqli_connect('localhost', 'root', '', 'cinelandia');

        $consulta = "SELECT id_usuario, nombre, apellido, email, usuario, nivel, fecha_registro, estado  FROM usuario";
        if ($resultado = mysqli_query($con, $consulta)) {

            echo "<tr><th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>NIVEL</th>
            <th>FECHA DE REGISTRO</th>
            <th>ESTADO</th>
            <th>ACCION 1</th>
            <th>ACCION 2</th>
            <th>ACCION 3</th>";


            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr><td>" . $fila["nombre"] . "</td>
                <td>" . $fila["apellido"] . "</td>
                <td>" . $fila["email"] . "</td>
                <td>" . $fila["usuario"] . "</td>
                <td>" . $fila["nivel"] . "</td>
                <td>" . $fila["fecha_registro"] . "</td>
                <td>" . $fila["estado"] . "</td>
                <td>";

                if ($fila['nivel'] == 'usuario') {
                    echo '<a href="hacer_admin.php?id=' . $fila['id_usuario'] . '">dar admin</a>';
                } else {
                    echo '<a href="sacar_admin.php?id=' . $fila['id_usuario'] . '">NO dar admin</a>';
                }

                echo "</td>
                
                <td><a href=\"borrar_usuario.php?id=" . $fila["id_usuario"] . "\">BORRAR</a></td><td>";

                if ($fila['estado'] == 'activo') {

                    echo '<a href="banear_usuarios.php?id=' . $fila['id_usuario'] . '">BANEAR</a>';
                } else {

                    echo '<a href="desbanear_usuario.php?id=' . $fila['id_usuario'] . '">ACTIVAR</a>';
                }
                echo "</td></tr>";
            }
        }
    } else {
        echo "La consulta tiene errores";
    }

    ?>

</body>

</html>