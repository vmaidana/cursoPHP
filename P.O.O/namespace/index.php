<?php

require_once("config.php");

use Cliente\Cadastro; //usa a classe dentro desse namespace

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123abc");

echo $cad . "<br>";

$cad->registrarVenda();

?>