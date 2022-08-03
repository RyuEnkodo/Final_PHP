<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="CSS/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
  <title>ADMINISTRAR CATEGORIAS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

  <div class="tabla">

    <h1>ADMINISTRADOR DE CATEGORIAS</h1>

    <table class="table table-dark table-striped">
      <?php
      require_once("tabla_cat.php")
      ?>
        </table>
  </div>
  <div class="vcc">
<div class="cses1"><a href="panel_admin.php">Volver Al Panel</a></div>
<div class="agregar"><a href="nueva_cat.php">Crear Nueva Categoria</a></div>
<div class="cses"><a href="index.php">Cerrar  Sesion</a></div>
</div>


</body>

</html>