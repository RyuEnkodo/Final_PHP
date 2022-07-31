<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="CSS/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lekton&family=Nothing+You+Could+Do&family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <title>Final Prog Web II</title>
</head>

<body>

  <?php

  $menu = array('Acerca De', 'Contacto', 'Login',);
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
