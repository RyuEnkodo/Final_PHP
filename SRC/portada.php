<html lang="en">

<head>
  <link rel="stylesheet" href="CSS/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
  <title>Nuestros Trabajos</title>
  <style>
    .footer {
      margin-top: 488px;
    }

    main.main2 {
      background-color: transparent;
    }
  </style>
</head>



<body>


  <?php

  require_once("_header.php");

  ?>

  <div class="container2">

    </br>
    <?php
    echo '<h1>Nuestro Catalogo</h1>';
    ?>

    <?php
    require_once("categorias.php");
    ?>


  </div>
  <main class="main2">

    <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'cinelandia');

    $idCat = $_GET["cat"];
    $consulta = "SELECT titulo, foto, descripcion FROM pelicula WHERE id_categoria = '$idCat'";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
      while ($fila = $resultado->fetch_array()) {
        $titulo = $fila['titulo'];
        $descripcion = $fila['descripcion'];
        $foto = $fila['foto'];
    ?>
        <div class="producto">
          <h2><?php echo $titulo ?></h2>

          <img class="imgtrabajo" src="<?php echo "../admin/" . $foto ?>" alt="">

          <p><?php echo $descripcion ?></p>

        </div>
    <?php
      }
    }

    ?>
    <hr class="linea">
  </main>

  <?php

  require_once("_footer.php");

  ?>
</body>

</html>