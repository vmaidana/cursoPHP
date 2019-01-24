<?php

function teste($callback) {
    //processo lento

    $callback();
}

teste(function(){
    echo "Terminou!";
});

$fn = function($a) { //função dentro de variável
    var_dump($a);
};

$fn("Oi");
?>