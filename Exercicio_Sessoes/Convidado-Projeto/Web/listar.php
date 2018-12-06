<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    include_once '../vendor/autoload.php';
    session_start();
?>
<body>
    <?php
        foreach($_SESSION['pessoa'] as $key => $value)
        {
            echo 'Nome: '.$value->getNome().'&emsp;';
            echo 'Sexo: '.$value->getSexo();
            echo '<br>';
        }
    ?>
</body>
</html>