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
    include_once 'vendor/autoload.php';
    use \App\Model\Fisica\Dvd;
    $dvd1 = new Dvd("O senhor dos aneis", "Elijah Wood", 20.00);
    echo $dvd1->getNome();
  ?>
</body>
</html>