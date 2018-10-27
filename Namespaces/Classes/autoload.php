<?php
  spl_autoload_register(
    function($classe){
      $filename = "$classe.php";
      if(file_exists($filename))
        include_once $filename;
    });
?>