<?php
  include_once 'dados.php';

  if(isset($_GET['genero'])){
    foreach($_GET['genero'] as $generos){
      foreach($filmes[$generos] as $v)
        echo $v.'<br>';
    }
  }
?>