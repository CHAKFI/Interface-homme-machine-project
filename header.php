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
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  
</head>

<body>

 
  <a href="index.php"><img style="margin-left: 1020px;" src="<?php bloginfo('template_directory'); ?>/img/estsb1.png""></img></a>
  <img align='left' style="margin-left: -20px;" src="<?php bloginfo('template_directory'); ?>/img/ucd.png""></img>

<div id='cssmenu'>

<ul class="logo-navbar">
</ul>

<ul>

   <li><a href='index.php'><span>Acceuil</span></a></li>
   <li class='has-sub'><a href='#'><span>Présentation</span></a>
      <ul>
         <li><a href='#'><span>Présentation</span></a></li>
         <li><a href='#'><span>Mot du directeur</span></a></li>
         <li><a href='#'><span>ESTSB en chiffres</span></a></li>
      </ul>
   </li>

   <li class='has-sub'><a href='#'><span>Formation</span></a>
    <ul>
         <li><a href='#'><span>Formation intial</span></a></li>
         <li><a href='#'><span>Formation secondaire</span></a></li>
    </ul>
   </li>

   <li class='has-sub'><a href='#'><span>Recherche</span></a>
    <ul>
         <li><a href='#'><span>Structures de recherche</span></a></li>
         <li><a href='#'><span>Centre des études Doctorales</span></a></li>
    </ul>
   </li>

   <li><a href='#'><span>Activités</span></a></li>
   <li><a href='#'><span>Carrières</span></a></li>

   <li class='has-sub'><a href='#'><span>Calendrier</span></a>
    <ul>
         <li><a href='#'><span>Stage</span></a></li>
         <li><a href='#'><span>Emploi</span></a></li>
    </ul>
   </li>

   <li class='last'><a href='#'><span>Contact</span></a></li>

</ul>
</div>


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