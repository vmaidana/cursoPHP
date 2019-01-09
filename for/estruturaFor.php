<?php

for ($i = 0; $i < 1000; $i+=5){

    if ($i > 200 && $i < 800) continue; // if com apenas uma instrução não precisa de chave

    if ($i === 900) break;

    echo $i . "<br>"; // concatenação com "."

}