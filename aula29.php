<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tela de Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php
    $login = "adilan";
    $senha = "1234";

    if(isset($_POST["login"])){
        //echo  $_POST["login"]. "<br>";
        //echo  $_POST["senha"];
        if(($_POST["login"] == $login)and($_POST["senha"] == $senha)){
            echo "Login feito com Sucesso";
        }else{
            echo "Login incorreto";
        }
    }
    ?>

    <form method="POST">
    <input type="text" name="login"><br>
    <input type="password" name="senha">
    <input type="submit" >
    </form>
    </body>
</html>