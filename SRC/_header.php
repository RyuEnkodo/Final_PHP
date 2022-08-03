<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lekton&family=Nothing+You+Could+Do&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>

  <?php

  $menu = array('Nosotros', 'Contacto', 'Catalogo', 'Login' );
  $contador = count($menu);

  ?>


  <header class="header">

    <div class="container logo-nav-container" class="logo">
      <nav class="navegacion">

        <ul>

          <li><a href="index.php">Inicio</a></li>

          <?php

          for ($i = 0; $i < $contador; $i++) {

            echo "<li><a href='" . "$menu[$i]" . ".php'>";
            echo $menu[$i];
            echo "</a></li>";
          }

          ?>

        </ul>
    </div>

    </nav>

  </header>
</body>

</html>
