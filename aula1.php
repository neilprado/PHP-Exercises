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
    $clientes = [array('nome' => 'Edemberg', 'endereco' => 'Rua A', 'cpf'=> '1', 'cidade'=> 'JPA'),
                array('nome' => 'Tetéio', 'endereco' => 'Rua B', 'cpf' => '2', 'cidade' => 'CG')];
  ?>
  <table>
    <thead>
      <tr>
        <?php
          $chaves = array_keys($clientes[0]);
          foreach($chaves as $c)
            echo "<th>$c</th>";
        ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          foreach($clientes as $keys => $values)
          {
            echo"<tr>";
            foreach($values as $k => $v)
                echo "<td>$v</td>";
            echo"</tr>";
          }
        ?>
      </tr>
    </tbody>
  </table>
</body>
</html>