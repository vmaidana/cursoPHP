<?php

$nome = 'Glaucio'; // escopo local, não visível fora do bloco

function teste() {

    global $nome; // resgata a variável do escopo global
    echo $nome;

}


function teste2() {

    $nome = 'João'; // variável de escopo local, não interfere em variáveis homônimas em outros blocos
    echo $nome. " agora no teste 2";

}

teste();

echo '<br/>';

teste2();

?>