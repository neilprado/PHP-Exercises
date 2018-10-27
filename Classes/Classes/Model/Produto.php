<?php
  abstract class Produto {
    private $ator;
    use Nomeavel;

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