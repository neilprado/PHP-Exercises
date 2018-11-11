<?php
  include_once 'dados.php';

  if(isset($_GET['genero'])){
    foreach ($filmes[$_GET['genero']] as $v)
      echo $v.'<br>';
  }
  
?>