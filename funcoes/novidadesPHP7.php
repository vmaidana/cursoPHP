<?php

function soma(int ...$valores):string {
/* int determina o tipo de dado recebido pela função  
* reticências faz a função receber n parâmetros
* : depois dos parênteses, determina o tipo de dado retornado pela função*/

    return array_sum($valores); //array_sum() já soma todos os valores do array, sem necessidade de um foreach

}

echo var_dump(soma(2, 2));
echo "<br>";
echo var_dump(soma(25, 33));
echo "<br>";
echo var_dump(soma(1.5, 3.2)); // função foi definida para int. ponto flutuante é ignorado
echo "<br>";

?>