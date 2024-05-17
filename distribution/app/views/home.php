<?php include PATH . "partials/header.php"?>
<link rel = "stylesheet" href = "<?=ROOT?>/assets/css/home.css">
<div class="p-3 mb-2 bg-light-subtle text-light-emphasis">
  <style>
    /* body{
      background-image: url("assets/images/horse.jpeg");
    } */
  h5{
    color: white;
  }
  p{
    color: red;
  }
  .containerpic{
    background-image: url("assets/images/horse.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    padding-bottom: 30%; 
    padding-top: 10%;
  }
  </style>
<body >
<center><div class = "containerpic">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/pfp.png" class="d-block w-10" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Christian Cerezo</h5>
        <p>the horseman of apocalypse</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/pfp.png" class="d-block w-10" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Eduardo Dizon</h5>
        <p>the horseman of apocalypse</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/mark.jpg" width="300x" height="300px" class="d-block w-10" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mark Ortiz</h5>
        <p>the horseman of apocalypse</p>
      </div>
  </div>
  <div class="carousel-item">
      <img src="assets/images/pfp.png"  class="d-block w-10" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Patric Ladrillano</h5>
        <p>the horseman of apocalypse</p>
</div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</body>

<?php include PATH . "partials/footer.php"?>