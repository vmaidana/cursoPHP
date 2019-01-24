<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); // intervalo de 15 dias

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo); // soma mais 15 dias

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>