<?php
// VARIÁVEL PRÉ-DEFINIDA, TAMBÉM CHAMADAS DE ARRAYS SUPER GLOBAIS

$numero = (int) $_GET['a']; //pega todas as variáveis recebidas através da URL e os insere na variável definida
    // (int) = força a conversão da variável obtida para o tipo definido dentro do parênteses, no caso, int

/* '?' separa url das variáveis. '&' separa uma variável da outra 
exemplo: http://localhost/variaveis/variaveisPreDefinidas.php?a=123&b=456
neste caso, get recebe a variável 'a' cujo valor atribuído é '123'
*/

var_dump($numero);

$ip = $_SERVER["REMOTE_ADDR"]; // coleta ip do usuário
$nome = $_SERVER["SCRIPT_NAME"]; // coleta nome da página
echo '<br/><br/>';
echo $ip;
echo '<br/><br/>';
echo $nome;

?>