<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    $txt = isset($_GET["texto1"]) ? $_GET["texto1"] : "A chave não existe";
    echo $txt;
    ?>

</body>

</html>