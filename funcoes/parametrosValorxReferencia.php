<?php

$a = 10;

function trocaValor($a) {

    $a += 50;

    return $a;

}

echo $a . "<br>";

echo trocaValor($a) ."<br>";

echo $a ."<br>"; // variável permanece 10. escopo da função diferente do escopo geral. variável != de parametro de função   

function trocaValorPorReferencia(&$b) { // & faz a função passar o valor por referência de endereço de memória

    $b += 50;

    return $b;

}

echo trocaValorPorReferencia($a) . "<br>";
echo $a; // agora variável passa a ter novo valor (60). pois a função trocou valor por referência

?>