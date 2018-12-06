<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Sexo: 
        M <input type="radio" name="sexo" value="M">
        F <input type="radio" name="sexo" value="F">
        <br>
        <input type="submit" value="Adicionar">
        <input type="submit" value="SAIR">
    </form>
    <a href="listar.php">Listar Convidados</a>
</body>
</html>