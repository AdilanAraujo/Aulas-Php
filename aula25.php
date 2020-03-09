<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 25</title>
</head>
<body>

<?php

    if(isset($_POST["idade"])){
        $idade = $_POST["idade"];

        if($idade < 18){
            echo "A idade de uma Crinaça ou um Adolescente";
        }elseif($idade >= 18 and $idade <60){
            echo "A idade de uma Pessoa Adulto";
        }else{
            echo "A idade é de uma pessoa da Terceira Idade";
        }
    }

?>

<form method="POST">

    <input type="text" name="idade">
    <input type="submit">


</form>




</body>
</html>