<?php 

    $a = NULL;

    $b = NULL;

    $c = 10;

    echo $a ?? $b ?? $c; // '??' ignora valores NULL. só considera valores válidos. economiza ifs

    $b = 8;

    echo "<br>";

    echo $a ?? $b ?? $c; // 'b' não é mais NULL. execução do comando para agora para no 'b'


?>