<?php
  namespace App\Excecoes;
  class CampoNuloException extends \Exception{
    function __construct($message){
      parent::__construct($message);
    }
  }
?>