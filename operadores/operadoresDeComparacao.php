<?php 

   $a = 30;

   $b = 55;

   var_dump($a > $b); // compara e retorna um boolean (true/false)

   echo "<br>";

   var_dump($a < $b);

   echo "<br>";

   var_dump($a == $b);

   echo "<br>";

   $a = 55.0;

   var_dump($a == $b); // compara apenas valor, não tipo. Float 55.0 vai dar igual int 55

   echo "<br>";

   var_dump($a === $b); // '===' igualdade de identidade: compara tipo e valor. Float 55.0 vai dar diferente de int 55
    
   echo "<br>";

   var_dump($a != $b); // '!=' compara apenas valor, não tipo. Float 55.0 vai dar igual int 55

   echo "<br>";

   var_dump($a !== $b); // '!==' diferença de identidade: compara tipo e valor. Float 55.0 vai dar diferente de int 55

?>