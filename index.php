<!doctype html>
<html lang="en">
  <head>
  <?php 
include('head.php')
?>
  </head>
  <body>
<header>
<?php $mi_pagina="index";
?>
<?php 
include('header.php')
?>
</header>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-duration="1500">
            <img class="d-block w-100" src="banner-1.png" alt="First slide">
          </div>
          <div class="carousel-item" data-duration="1500">
            <img class="d-block w-100" src="armor (1).jpeg" alt="Second slide">
          </div>
          <div class="carousel-item" data-duration="1500">
            <img class="d-block w-100" src="banner-3.png" alt="Third slide">
          </div>
          <div class="carousel-item" data-duration="1500">
            <img class="d-block w-100" src="banner-4.png" alt="Fourth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <?php 
include('footer.php')
?>
  </body>
</html>