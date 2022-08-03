<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
  <title>Home</title>
  <style>
    a {
      text-decoration: none;
      font-family: "Merienda One", cursive;
      color: rgb(255, 255, 255);
      letter-spacing: 5px;
      font-size: 1em;
      padding: 0.5rem 1rem;
    }
  </style>
</head>



<body>

<a href="index.php">Cerrar Sesion</a>
<a href="../admin/index.php">Admin</a>



  <?php
  session_start();                              //CREA LA SESION O LA REANUDA

  if (!isset($_SESSION['id_usuario'])) {                  //SI NO PUEDE VALIDAR EL ID
    header("Location: index.php?forbidden=1");    // LANZA ERROR FORBIDDEN
  }



  ?>

<?php
include "index.php" 

?>
  
</html>







