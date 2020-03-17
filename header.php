<!DOCTYPE html>
<html lang="en" >
<head>
  
  <title> ESTsb </title>
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/estlogo.png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri().'/STL.css'?>">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  
</head>

<body>

   <!-- les logos -->
   
   <a href="http://www.ucd.ac.ma"><img id='ucd' src="<?php bloginfo('template_directory'); ?>/img/ucd.png""></img></a>
   <a href="index.php"><img id='estsb' src="<?php bloginfo('template_directory'); ?>/img/estsb1.png""></img></a>


   <!-- navbar réf: http://www.estsb.ucd.ac.ma -->
<div id='cssmenu'>
<ul class="logo-navbar">
</ul>

<ul>

   <li><a href='index.php'><span>Acceuil</span></a></li>
   <li class='has-sub'><a href='#'><span>Présentation</span></a>
      <ul>
         <li><a href='/Prest.php'><span>Présentation</span></a></li>
         <li><a href='/mdd.php'><span>Mot du directeur</span></a></li>
         <li><a href='/est_chf.php'><span>ESTSB en chiffres</span></a></li>
      </ul>
   </li>

   <li class='has-sub'><a href='#'><span>Formation</span></a>
    <ul>
         <li><a href='/fi.php'><span>Formation intial</span></a></li>
         <li><a href='/fs.php'><span>Formation secondaire</span></a></li>
    </ul>
   </li>

   <li class='has-sub'><a href='#'><span>Recherche</span></a>
    <ul>
         <li><a href='/sdr.php'><span>Structures de recherche</span></a></li>
         <li><a href='/ced.php'><span>Centre des études Doctorales</span></a></li>
    </ul>
   </li>

   <li><a href='/actv.php'><span>Activités</span></a></li>
   <li class='has-sub'><a href='#'><span>Carrières</span></a>
    <ul>
         <li><a href='/stg.php'><span>Stage</span></a></li>
         <li><a href='/emp.php'><span>Emploi</span></a></li>
    </ul>
   </li>

   <li><a href='cal.php'><span>Calendrier</span></a></li>

   <li class='last'><a href='/contact.php'><span>Contact</span></a></li>

</ul>
</div>
 

<br><br><br>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <a href="pub1.html">
       <img src="<?php bloginfo('template_directory'); ?>/img/p1.jpg" style="width:100%">
    </a>
  </div>

  <div class="mySlides">
    <a href="pub2.html">
      <img  src="<?php bloginfo('template_directory'); ?>/img/p2.jpg" style="width:100%">
    </a>
  </div>

  <div class="mySlides">
    <a href="pub3.html">
      <img align="center"  src="<?php bloginfo('template_directory'); ?>/img/p3.jpg" style="width:100%">
    </a>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<br><br><br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>

<br><br><br>


</body>
<script>
( function( $ ) {

    $( document ).ready(function() {
    $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
        $('#cssmenu #menu-button').on('click', function(){
            var menu = $(this).next('ul');
            if (menu.hasClass('open')) {
                menu.removeClass('open');
            }
            else {
                menu.addClass('open');
            }
        });
    });

</script>
</html>