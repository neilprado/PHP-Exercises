<?php
  namespace App\Model\Fisica;
  class Dvd extends \App\Model\Produto{
    private $preco;
    function __construct($nome, $ator, $preco){
      parent::__construct($nome, $ator);
      $this->preco = $preco;
    }

    function getPreco(){
      return $this->preco;
    }

    function setPreco($preco){
      $this->preco = $preco;
    }
  }
?>