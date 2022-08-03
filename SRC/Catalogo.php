<html lang="en">

<head>
  <link rel="stylesheet" href="CSS/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
  <?php require_once("_header.php") ?>
  <title>Catalogo</title>
</head>
<body>
  
  <main class="main2">

    <div class="container2">

      </br>

      <h1>Seleccione una Categoria</h1>


      <?php
      require_once("categorias.php");
      ?>


    </div>

    <hr class="linea">


    </div>

  </main>
  
  <?php

  require_once("_footer.php");

  ?>

</body>

</html>