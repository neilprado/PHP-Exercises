<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    include_once 'autoload.php';
    $dvd = new Dvd('Ana ao Vivo', '1', 20.0, time());
    echo 'Nome:'.$dvd->getNome();
  ?>
</body>
</html>