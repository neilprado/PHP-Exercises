<?php
    session_start();
    if(!isset($_SESSION['pessoa']))
        $_SESSION['pessoa'] = array();
    include_once '../vendor/autoload.php';

    if(isset($_POST['nome']) && isset($_POST['sexo'])) {
        $pessoa = new \App\Model\Convidado($_POST['nome'], $_POST['sexo']);
        array_push($_SESSION['pessoa'], $pessoa);
        $_SESSION['msg'] = 'Adicionado com sucesso';
        print_r($_SESSION['pessoa']);
    }
?>