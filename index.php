<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Поиск строки в тексте</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="all">
      <div class="h1">
        <h2>Найти строку в тексте</h2>
      </div>
      <div class="form">
        <form class="" action="" method="post">
          <label for="words">Поиск в тексте: </label>
          <input id="words" type="text" name="words" value=""><br><br>
          <button id="search" type="button">Поиск</button>
        </form>
      </div>
      <div class="text">
        <?php
          require 'search.php';
        ?>
      </div>
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script src="js/index.js"></script>
  </body>
</html>
