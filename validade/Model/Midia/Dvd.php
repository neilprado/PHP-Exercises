<?php
  class Dvd extends Produto{
    function __construct($nome, $cod, $preco, $ano){
      if($ano == null)
        throw new InformacaoNulaException("O parâmetro ano está nulo");
      parent::__construct($nome, $cod, $preco);
      $this->ano = $ano;

      function getAno(){
        return $this->ano;
      }

      function setAno($ano){
        $this->ano = $ano;
      }
    }
  }
?>