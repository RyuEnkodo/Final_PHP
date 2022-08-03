<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("_header.php") ?>
    <title>Inicio</title>

</head>

<body>

<div id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel">
  <div class="carousel-inner contenedor_carrusel">
    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/FIX0fdYWYAAwTl5?format=jpg&name=large" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://prensa.lacosta.gob.ar/wp-content/uploads/backup/2016/02/cartelera-cine-4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://s1.eestatic.com/2022/03/31/series/cine/661444558_223159911_1706x960.jpg" class="d-block w-100" alt="...">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 
  

</div>

<div class="contenedor_cards">

<div class="card bg-dark" style="width: 18rem;">
  <img src="../IMG/morbius.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">Morbius</h2>
    <p class="card-text">Nueva entrega de la saga de vampiros Spin-off (Ultraviolet), más atrapante que nunca.</p>
  </div>
</div>
<div class="card bg-dark" style="width: 18rem;">
  <img src="../IMG/light.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">Lightyear</h2>  
    <p class="card-text">Nueva pelicula de Toy Story, con impresionante final.</p>
  </div>
</div>
<div class="card bg-dark" style="width: 18rem;">
  <img src="../IMG/freeguy1.jpg" class="card-img-top" alt="...">
  <div class="card-body ">
    <h2 class="card-title">Free Guy</h2>
    <p class="card-text ">Una película cómica del actor de "Deadpool", el cual transcurre dentro de un juego, una serie que desafía la realidad.</p>
  </div>
</div>

</div>

</div>



</div>
<?php
include "_footer.php" 
?>
</body>
</html>

