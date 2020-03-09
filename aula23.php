<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Ambiente para Estudo PHP </title>
        <meta charset="UTF-8">
    </head>

    <body>

        <?php 
        if(isset($_POST["valor1"])){
        echo $_POST["valor1"];
        }
        ?>

        <form method="POST">
            <input type="text" name="valor1">
            <input type="text" name="valor2">
            <input type="submit">
        </form>

    </body>
</html>