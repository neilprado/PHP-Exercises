<?php
namespace App\Model\Midia;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DVD
 *
 * @author 2420625
 */
class DVD extends \App\Model\Produto
{
    private $anoLancamento;
    function __construct(string $codigo, string $nome, string $anoLancamento) {
        $this->anoLancamento = $anoLancamento;
        parent::__construct($codigo, $nome);
        $this->log('Foi criada uma instancia de '.__CLASS__.'<br>');
    }
}
