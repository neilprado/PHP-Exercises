<?php
    include_once '../vendor/autoload.php';
    session_start();
    if(!isset($_SESSION['pessoa']))
        $_SESSION['pessoa'] = array();    

    if(isset($_POST['nome']) && isset($_POST['sexo'])) {
        $pessoa = new \App\Model\Convidado($_POST['nome'], $_POST['sexo']);
        array_push($_SESSION['pessoa'], $pessoa);
        header("location:home.php?msg=Adicionado com sucesso");        
    }
    header("location:home.php?msg=Erro");        
?>