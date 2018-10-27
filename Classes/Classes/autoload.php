<?php
  spl_autoload_register(
    function($classe){
      echo 'O interpretador 1 está a procura da classe '.$classe.'<br>';
      $filename = "$classe.php";
      if(file_exists($filename))
        include_once $filename;
    });

    spl_autoload_register(
      function($classe){
        echo 'O interpretador 2 está a procura da classe '.$classe.'<br>';
        $filename = "Model/$classe.php";
        if(file_exists($filename))
          include_once $filename;
      });

      spl_autoload_register(
        function($classe){
          echo 'O interpretador 3 está a procura da classe '.$classe.'<br>';
          $filename = "Model/Digital/$classe.php";
          if(file_exists($filename))
            include_once $filename;
        });

        spl_autoload_register(
          function($classe){
            echo 'O interpretador 4 está a procura da classe '.$classe.'<br>';
            $filename = "Model/Fisica/$classe.php";
            if(file_exists($filename))
              include_once $filename;
        });

        spl_autoload_register(
          function($classe){
            echo 'O interpretador 5 está a procura da classe '.$classe.'<br>';
            $filename = "Excecoes/$classe.php";
            if(file_exists($filename))
              include_once $filename;
          });

          spl_autoload_register(
            function($classe){
              echo 'O interpretador 6 está a procura da classe '.$classe.'<br>';
              $filename = "Classes/Traits/$classe.php";
              if(file_exists($filename))
                include_once $filename;
              echo 'O interpretador não conseguiu achar a classe '.$classe.'<br>';
            });
?>