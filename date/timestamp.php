<?php

$ts = strtotime("2001-09-11"); // converte uma string para um timestamp

// $ts = strtotime("now"); // timestamp de agora

// $ts = strtotime("+1 day"); timestamp do dia atual mais 1

// $ts = strtotime("+1 week"); timestamp do dia atual mais 1 semana

echo date("l, d/m/Y", $ts);

?>