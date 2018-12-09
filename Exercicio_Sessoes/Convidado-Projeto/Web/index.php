<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    	if(isset($_SESSION['msg']))
      	echo $_SESSION['msg'];
    ?>
    <form action="autenticar.php" method="post">
       Login: <input type="text" name="login"><br>
       Senha: <input type="password" name="senha"><br>
       <input type="submit">
    </form>
</body>
</html>