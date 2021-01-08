<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise with axios</title>
    <!-- Css  -->
    <link rel="stylesheet" href="style.css">
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" integrity="sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ==" crossorigin="anonymous"></script>
</head>
<body>
<!-- Header -->
<header>
  <div class="cont_header">
    <img src="img/Spotify_Logo_RGB_Green.png" style="width:250px;height:75px">
  </div>
</header>

<!-- Main  -->
<main id="app">
  <div class="cont_main">
    <div class="box" v-for="album in albums">
        <img :src="album.poster" class="poster">
        <h1>{{album.title}}</h1>
        <h3>{{album.author}}</h3>
        <h3>{{album.year}}</h3>
    </div>  
  </div>
</main>

    <script src="script.js"></script>
</body>
</html>