<?php
  class Leite extends Produto implements Perecivel{
    private $volume;
    private $dtValidade;

    function __construct($nome, $cod, $preco, $volume, $validade){
      if ($volume == null)
        throw new InformacaoNulaException("Parâmetro volume está nulo");
      if ($validade == null)
        throw new InformacaoNulaException("Parâmetro validade está nulo");
      parent::__construct($nome, $cod, $preco);
      $this->volume = $volume;
      $this->dtValidade = $validade;
    }

    function getVolume(){
      return $this->volume;
    }

    function getDtValidade(){
      return $this->getDtValidade;
    }

    function setVolume($volume){
      $this->volume = $volume;
    }

    function setDtValidade($data){
      $this->dtValidade = $data;
    }

    function estaVencido():bool{
      $atual = new DateTime();
      if($this->dtValidade < $atual)
        return True;
      return False;
    }
  }
?>