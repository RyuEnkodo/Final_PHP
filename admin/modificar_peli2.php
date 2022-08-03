<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>Modifica una categoria</title>
</head>

<body>
    <h1>Proceso finalizado</h1>
    <div class="formulario">
        <?php

        if (mysqli_connect("localhost", "root", "", "cinelandia")) {

            $con = mysqli_connect('localhost', 'root', '', 'cinelandia');


            if (isset($_POST["titulo"]) and isset($_POST["ID"])) {
                $titulo = $_POST["titulo"];
                $ID = $_POST["ID"];
                $descripcion = $_POST["descripcion"];
                $nombre_imagen = $_FILES['foto']['name'];
                $temporal = $_FILES['foto']['tmp_name']; 
                $carpeta = 'img/';
                $ruta = $carpeta.'/'.$nombre_imagen;
                move_uploaded_file($temporal,$ruta);



                $consulta = "UPDATE pelicula SET titulo='$titulo' , foto='$ruta', descripcion='$descripcion'  WHERE id_pelicula='$ID'";

                if (mysqli_query($con, $consulta)) {

                    echo "Trabajo Modificado Exitosamente!";
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
    <div class="volver">
        <a href="peliculas.php">VOLVER AL PANEL</a>
    </div>
</body>

</html>