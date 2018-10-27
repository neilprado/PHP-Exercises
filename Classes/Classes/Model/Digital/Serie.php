<?php
  class Serie extends Produto{
    private $canal;

    function __construct($nome, $ator, $canal){
      parent::__construct($nome, $ator);
      $this->canal = $canal;
    }

    function getCanal(){
      return $this->canal;
    }

    function setCanal($canal){
      $this->canal = $canal;
    }
  }
?>