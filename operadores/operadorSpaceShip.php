<?php 

    $a = 50;

    $b = 35;

    var_dump($a <=> $b);

    /* operador spaceship: maior, menor ou igual
    * se a maior que b: retorna int 1
    * se a menor que b: retorna int -1
    * se a igual a b: retorna int 0
    */

    echo "<br>";

    $a = 35;

    var_dump($a <=> $b);

    echo "<br>";

    $a = 15;

    var_dump($a <=> $b);
    
?>