<!DOCTYPE html>
<html lang="en" >
<head>
  
  <title> ESTsb </title>
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/estlogo.png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri().'/style.css'?>">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'> 
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  
</head>

<body>


  <a align='right' href="index.php"><img  src="<?php bloginfo('template_directory'); ?>/img/estsb1.png""></img></a>
  <img  src="<?php bloginfo('template_directory'); ?>/img/ucd.png""></img>

<div id='cssmenu'>
<ul class="logo-navbar">
</ul>
<ul>
   <li><a href='#'><span>Acceuil</span></a></li>
   <li class='has-sub'><a href='#'><span>Présentation</span></a>
      <ul>
         <li><a href='#'><span>Sub Product</span></a></li>
         <li class='has-sub'><a href='#'><span>Product 1</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>Formation</span></a></li>
   <li class='last'><a href='#'><span>Recherche</span></a></li>
</ul>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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