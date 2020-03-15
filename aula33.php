<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <?php

    if (isset($_POST["dependentes"])) {
        $dependentes =  $_POST["dependentes"];
        if(! is_numeric($dependentes)){
            //! Nega o Is numeric ficando assim : Se não for numerico faça.... e assim executa o codigo
            $dependentes =1;
            echo"Não Numerico";
        }
        $conta = 0;
        echo "
            <table border='1'>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Nascimento</th>
        </tr>";
        do {
            $conta = $conta + 1;
            echo "

        <tr>
            <th>Dependente $conta</th>
            <th><input type='text' name='nome'></th>
            <th><input type='text' name='nascimento'></th>
        </tr>
        ";


        } while ($conta < $dependentes);

        echo "</table>";
    }


    ?>




    <form method="POST">
        <input type="text" name="dependentes">

        <input type="submit">
    </form>


</body>

</html>