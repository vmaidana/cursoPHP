<?php

session_start();

//session_unset(); //apaga todas as variáveis da sessão

//unset($_SESSION["nome"]); //apaga a variável de sessão especificada

//session_destroy() // limpa a variável e remove o usuário. destroi toda a sessão

echo $_SESSION["nome"];

?>