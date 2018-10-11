<?php
  spl_autoload_register(
    function($classe){
    echo 'Interpretador 1 está a procura da classe: '.$classe.' <br>';
    $filename = "$classe.php";
    if(file_exists($filename))
      include_once $filename;
  });

  spl_autoload_register(
    function($classe){
    echo 'Interpretador 2 está a procura da classe: '.$classe.' <br>';
    $filename = "Model/$classe.php";
    if(file_exists($filename))
      include_once $filename;
  });

  spl_autoload_register(
    function($classe){
    echo 'Interpretador 3 está a procura da classe: '.$classe.' <br>';
    $filename = "Model/Midia/$classe.php";
    if(file_exists($filename))
      include_once $filename;
  });

  spl_autoload_register(
    function($classe){
    echo 'Interpretador 4 está a procura da classe: '.$classe.' <br>';
    $filename = "Model/Perecivel/$classe.php";
    if(file_exists($filename))
      include_once $filename;
  });

  spl_autoload_register(
    function($classe){
    echo 'Interpretador 5 está a procura da classe: '.$classe.' <br>';
    $filename = "Traits/$classe.php";
    if(file_exists($filename))
      include_once $filename;
  });
?>