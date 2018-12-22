<?php 

    $frase = "A repetição é a mãe da retenção.";

    $palavra = "mãe";

    $busca = strpos($frase, $palavra); //strpos: procura na variável escolhida, o índice da primeira ocorrência da string escolhida

    echo "<br>";
    
    var_dump($busca); // neste caso, o índice será int 19, pois os acentos contam como uma posição

    echo "<br>";

    $busca = mb_strpos($frase, $palavra); //função mb_stropos define a posição da string baseando-se na encodação UTF-8

    var_dump($busca); // neste caso, o índice será int 16, pois os acentos não contam mais como uma posição 

    $texto = substr($frase, 0, $busca); //substr: busca na variável escolhida, a string que começa no índice indicado, e termina no índice indicado

    echo "<br>"; // a conta correta é com o índice de 'strpos()', e não 'mb_strpos()'

    // se a encodação do site for UTF-8, funcionaria com mb_strpos()?

    var_dump($texto); 

    echo "<br>";

    $texto2 = substr($frase, $busca + strlen($palavra), strlen($frase)); //strlen: retorna tamanho da string
    var_dump($texto2); // frase correta deveria ser "da retenção". como a contagem de índices pelo UTF-8 é incorreta, imprime frase errada

?>