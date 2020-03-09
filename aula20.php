<?php 

/**
 * Módulo de Divisão
 * Resto da Divisão
 * O caractere % foi definido como o Operador Módulo
 * 7 % 3 = 1
 * para trazer o resto de numeros de ponto flutuante.
 * Deve se utilizar fmod(primeiro numero, segundo numero)
 */

$num1 = 9;
$num2 =2;
$res = $num1 . $num2;
$resto = $num1 % $num2;

echo $num1 ." dividido por " . $num2 . " = " . $res;
echo"\n";
echo"\n";
echo"O resto da divisão é:" . $resto;

?>