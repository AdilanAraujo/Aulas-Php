<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <?php
    $tab = 0;
    if (isset($_POST["edTABUADA"])) {
        $tab = $_POST["edTABUADA"];
        if (!is_numeric($tab)) {
            echo "<br>O Valor informado não é um número<br>";
        }else {
        for($num=1;$num<=10;$num++){
            echo $tab . " x " . $num. " = " . ($tab * $num) . "<br>";
        }
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="edTABUADA">
        <input type="submit">
    </form>
</body>

</html>