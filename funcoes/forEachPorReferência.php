<?php  

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as &$value) {

    if (gettype($value) === 'integer') $value += 10; // adiciona mais 10 para a idade. Por ser com referência, valor muda dentro do array também

        echo $value. '<br>';

}

print_r ($pessoa);

?>