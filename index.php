<?php
/**
 * Dominoes: Num array created to ulter the number of dots 
 * on the dominoes
 */


$dots = [0,1,2,3,4,5,6];


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DOMinoes with PHP</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
  <h1>Julie's Dominoes</h1>

  <div id = "dominoes" class="dominoes">
    <?php for ($i = 0; $i < 100; $i++) : ?>
      <?php
      
     $dot = $dots[rand(0, count(dots) -1)];
    ?>

    <div class="domino">
      <div class="dots one">
        <div class="dot"></div>
      </div>
      <div class="dots two">
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <div class="domino">
      <div class="dots three">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div class="dots four">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <div class="domino">
      <div class="dots five">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div class="dots six">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <!-- REMOVE THE DEMO CODE -->
  </div>
</body>
</html>
     
