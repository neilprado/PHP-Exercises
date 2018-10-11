<?php
  class Produto {
    use Nomeavel, Logger;
    private $codigo;
    private $preco;

    function __construct($nome, $cod, $preco){
      if ($nome == null)
        throw new InformacaoNulaException("O parâmetro nome está nulo");
      if ($cod == null)
        throw new InformacaoNulaException("O parâmetro código está nulo");
      if($preco == null)
        throw new InformacaoNulaException("O parâmetro preco está nulo");

        $this->nome = $nome;
        $this->codigo = $cod;
        $this->preco = $preco;
    }

    function getCodigo(){
      return $this->codigo;
    }

    function getPreco(){
      return $this->preco;
    }

    function setCodigo($cod){
      $this->codigo = $cod;
    }

    function setPreco($preco){
      $this->preco = $preco;
    }
  }
?>