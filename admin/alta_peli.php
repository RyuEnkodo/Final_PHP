<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="formulario">
        <?php

        if (mysqli_connect("localhost", "root", "", "cinelandia")) {

            $con = mysqli_connect('localhost', 'root', '', 'cinelandia');

            if (isset($_POST["titulo"])) {


                $nombre = $_POST["titulo"];
                $desc = $_POST["descripcion"];
                $categoria = $_POST["categoria"];
                $nombre_imagen = $_FILES['foto']['name'];
                $temporal = $_FILES['foto']['tmp_name']; 
                $carpeta = 'img/';
                $ruta = $carpeta.'/'.$nombre_imagen;
                move_uploaded_file($temporal,$ruta); // TRAES LA IMAGEN DE LA BASE DE DATOS A LA CARPETA

                $consulta = "INSERT INTO pelicula ( titulo, 
        foto, descripcion, id_categoria) 
        VALUES ('$nombre', '$ruta', '$desc', '$categoria')";

                if (mysqli_query($con, $consulta)) {

                    echo "Agregado!";
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