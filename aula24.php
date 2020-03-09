<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php
        if(isset($_POST["num"])){
        echo $_POST["num"];
        echo "<br>";
        $num = $_POST["num"];
        
        if($num % 2 == 0){
            echo " O número informado é Par";
        }else{
            echo " O número informado é Impar";
        }
        }
    ?>



    <form method="POST">
    <input type="text" name="num"/>
    <input type="submit">

    </form>









    </body>
</html>