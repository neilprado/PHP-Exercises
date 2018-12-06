<?php
    namespace App\Model;

    class Convidado
    {
        private $nome;
        private $sexo;

        function __construct($nome, $sexo)
        {
            $this->nome = $nome;
            $this->sexo = $sexo;
        }

        function getNome()
        {
            return $this->nome;
        }

        function getSexo()
        {
            return $this->sexo;
        }

        function setNome($nome)
        {
            $this->nome = $nome;
        }

        function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }
    }
?>
