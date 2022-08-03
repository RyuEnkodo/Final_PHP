<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>CREAR NUEVA PELICULA</title>
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

    <div class="formulario">

        <img src="https://thumbs.dreamstime.com/b/icono-de-l%C3%ADnea-bolsa-compras-en-fondo-negro-ilustraci%C3%B3n-vectores-estilo-plano-170442812.jpg" alt="">

        <form action="alta_peli.php" method="post" enctype="multipart/form-data"> 
           
            <label for="titutlo">Escriba el Titulo de la Pelicula: </label>
            <input id="titutlo" type="text" name="titulo">


            <label for="foto">Escriba la Ruta de la Imagen: </label>
            <input id="foto" type="file" name="foto" enctype="">

            <label for="descripcion">Descripcion: </label>
            <textarea id="descripcion" name="descripcion"></textarea>


            <label for="categoria">Elija una Categoria: </label>
            <?php
            include("funciones.php");
            listarEnOptions("categoria", "nombre", "id_categoria"); // LISTAR LAS CATEGORIAS

           
            ?>

            <input type="submit" value="Crear Pelicula">

        </form>

    </div>
    <div class="vcc">
        <div class="cses1"><a href="panel_admin.php">Volver Al Panel</a></div>
        <div class="agregar"><a href="peliculas.php">Administrador de peliculas</a></div>
        <div class="cses"><a href="index.php">Cerrar Sesion</a></div>
    </div>
</body>

</html>