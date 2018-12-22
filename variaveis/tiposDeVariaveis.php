<?php
// --TIPOS BÁSICOS--

// exemplos de string. aspas duplas ou simples
$nome = "Hcode";
$site = 'www.hcode.com.br';

// exemplo de int
$ano = 1990;

// exemplo de float
$salario = 5500.99;

// exemplo de boolean
$bloqueado = false;

/////////////////////////////////////////
// --TIPOS COMPOSTOS--

// exemplo de array
$frutas = array('abacaxi', 'laranja', 'uva', 'manga');
echo $frutas[2]; // escolha de elemento a ser impresso do array pelo índice nos colchetes [uva]

// exemplo de objeto
$nascimento = new DateTime();

echo '<br/><br/>';
var_dump($nascimento); // mostra o tipo da variável

/////////////////////////////////////////
// -TIPOS ESPECIAIS

// exemplo de resource
$arquivo = fopen('exemplo03.php', 'r'); // lê arquivo indicado nos parênteses. método após a vírgula
echo '<br/><br/>';
var_dump($arquivo);

// exemplo de nulo
$nulo = NULL;

?>