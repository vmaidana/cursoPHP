<?php

class Pessoa {
    public $nome;// atributo

    public function falar() {// método
        return "O meu nome é ".$this->nome;
    }
} 

$vinicius = new Pessoa();
$vinicius->nome = "Vinícius Maidana";
echo $vinicius->falar();

?>