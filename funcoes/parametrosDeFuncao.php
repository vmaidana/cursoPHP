<?php

function ola($texto = "mundo", $periodo = "Bom dia") {
    
    return "Olá $texto! $periodo!<br>";

}

echo ola();
echo ola("", "Boa noite");
echo ola("Gláucia", "Boa Tarde");
echo ola("João", "");

function oi() {

    $argumentos = func_get_args(); // função nativa do php. Recupera e retorna em um array, todos os argumentos passados para a função
    
    return $argumentos;

}

var_dump (oi("oi", 10));

?>