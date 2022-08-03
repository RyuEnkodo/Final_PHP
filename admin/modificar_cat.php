<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>MODIFICAR CATEGORIA</title>
    <style>
        .cses1 a {
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
    <h1>Modificar nombre de Servicio</h1>
    <div class="formulario">

        <?php

        if (mysqli_connect("localhost", "root", "", "cinelandia")) {

            $con = mysqli_connect('localhost', 'root', '', 'cinelandia');



            if (isset($_GET["cat"])) {
                $codigo = $_GET["cat"];

                $consulta = "SELECT id_categoria, nombre FROM categoria WHERE id_categoria='$codigo'";
                if ($resultado = mysqli_query($con, $consulta)) {
                    $fila = mysqli_fetch_array($resultado);

                    echo '<form action="modificar_cat2.php" method="post">';

                    echo 'Código de Servicio : ' . $fila["id_categoria"];
                    echo '</br>';
                    echo '</br>';

                    echo '<label for="Nombre">Nombre de Servicio :</label>';
                    echo '</br>';
                    echo '</br>';
                    echo '<input type="text" name="Nombre" value="';
                    echo $fila["nombre"];
                    echo '">';

                    echo '<input type="hidden" name="idCat" value="' . $fila["id_categoria"] . '">';

                    echo '<input type="submit" value="MODIFICAR">
			 </form>';
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
        <div class="agregar"><a href="nuevo_servicio.php">Crear Nueva Categoria</a></div>
        <div class="cses"><a href="index.php">Cerrar Sesion</a></div>
    </div>
</body>

</html>