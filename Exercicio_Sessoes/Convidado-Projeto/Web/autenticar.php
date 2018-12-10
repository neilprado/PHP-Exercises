<?php
    if(isset($_POST['login']) && isset($_POST['senha'])){
        if($_POST['login'] == 'neil' && $_POST['senha'] == '123'){
            session_start();
            $_SESSION['logou'] = TRUE;
            header("location:home.php?msg=Usuário logado com sucesso");
        }
        else
            header('location:index.php?msg=Falha na autenticação');

    }
?>
