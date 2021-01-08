<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise with include</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "data.php"; ?>

<!-- Header -->
<header>
  <div class="cont_header">
    <img src="img/Spotify_Logo_RGB_Green.png" style="width:250px;height:75px">
  </div>
</header>

<!-- Main  -->
<main>
  <div class="cont_main">
    
    <?php 
      foreach ($database as $key => $value) {
        echo '<div class="box">';
        // immagine
        $img = $value['poster'];
        echo '<img class="poster" src="' . $img . '" alt="">';
        // title 
        $title = $value['title'];
        echo '<h1>' . $title . '</h1>';
        // author
        $author = $value['author'];
        echo '<h3>' . $author . '</h3>';
        // year
        $year = $value['year'];
        echo '<h3>' . $year . '</h3>';
        echo '</div>';
      }
    ?> 
    
    
    
  </div>
</main>

    
</body>
</html>