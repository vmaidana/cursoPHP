<?php

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php") === true) {
    require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasses"); // chama a função entre aspas

spl_autoload_register(function($nomeClasse) { // declarando a função dentro dos parênteses
    if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){ // nome diretório, separador e nome da classe concatenados
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

$carro = new DelRey();

$carro->acelerar(80);

?>