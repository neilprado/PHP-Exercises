<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="main.php" method="get">
    <?php
      include_once 'main.php';
      $chaves = array_keys($filmes);
      foreach($chaves as $v){
    ?>
        <input type="radio" name="genero" value="<?php echo $v; ?>"> <?php echo $v; ?> <br>
    <?php } ?>
    <input type="submit" value="Ok">
  </form>
</body>
</html>