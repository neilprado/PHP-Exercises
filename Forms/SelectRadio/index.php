<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="selectr.php" method="get">
    <select name="genero">
      <?php
        include_once 'selectr.php';
        $chaves = array_keys($filmes);
        foreach($chaves as $v){
      ?>
          <option value="<?php echo $v; ?>"> <?php echo $v; ?> </option>
      <?php } ?>      
    </select>
    <input type="submit">
  </form>
</body>
</html>