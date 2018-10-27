<?php
  namespace App\Model;
  abstract class Produto {
    private $ator;
    use \App\Traits\Nomeavel;

    function __construct($nome, $ator){
      $this->nome = $nome;
      $this->ator = $ator;

    }

    function getAtor(){
      return $this->ator;
    }

    function setAtor($ator){
      $this->ator = $ator;
    }

  }
?>