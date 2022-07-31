<?php
include "_header.php" 

?>

<!DOCTYPE html>
<html lang="es">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HOME</title>

</head>

<body>

<div id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel">
  <div class="carousel-inner">
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
 
  <article class="card">
        <img src="../IMG/mandalorian2.jpg" alt="Mandalorian" class="img">
        <div class="contenedor">
            <h2 class="title">The Mandalorians</h2>
            <p class="copy">The Mandalorians were a clan-based cultural group that was composed of members from multiple species all bound by a common culture, creed, and code.</p>
            <a href="https://www.disneyplus.com/es-ar/welcome/the-mandalorian?cid=DSS-Search-Google-71700000075917824-&s_kwcid=AL!8468!3!496770105075!e!!g!!mandalorian&gclid=Cj0KCQjwpreJBhDvARIsAF1_BU0cbiguUCcw8O8ibtLz-XCJLKNM0f4RhL6LajWg6SQrItoLjiOLbmoaAnisEALw_wcB&gclsrc=aw.ds" class="cta">Join Us!</a>
        </div>
    </article>

    <div class="card-group">
  <div class="card">
    <img src="../IMG/mandalorian2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="../IMG/mandalorian2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="../IMG/mandalorian2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

  
</div>



</div>
</body>
<?php
include "_footer.php" 

?>
</html>

