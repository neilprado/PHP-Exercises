<?php
  trait Nomeavel{
    private $nome;

    function getNome():String{
      return $this->nome;
    }

    function setNome($nome){
      $this->nome = $nome;
    }
  }
?>