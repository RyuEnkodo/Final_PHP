<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <title>CREAR CATEGORIA</title>
    <style>
    h1 {
      margin-top: 200px;
    }
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

        <img src="https://thumbs.dreamstime.com/b/icono-de-l%C3%ADnea-bolsa-compras-en-fondo-negro-ilustraci%C3%B3n-vectores-estilo-plano-170442812.jpg" alt="">
        <form action="alta_cat.php" id="forma" name="forma" method="post">
            <label for="NombreServicio">Nombre de Categoria :</label></br></br>
            <input type="text" id="NombreServicio" name="NombreServicio" required="true" />
            <input type="submit" value="Crear Categoria" id="Envio" />
        </form>
    </div>
    <div class="vcc">
        <div class="cses1"><a href="panel_admin.php">Volver Al Panel</a></div>
        <div class="agregar"><a href="categorias.php">Administrador de Categorias</a></div>
        <div class="cses"><a href="index.php">Cerrar Sesion</a></div>
    </div>
</body>

</html>