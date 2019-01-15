<?php

session_id('5t866p30vt437qolr07r8djq1m'); // atribuir o id específico para recuperar a sessão anterior

require_once("config.php");

session_regenerate_id(); 

/*boa pratica: usar em um arquivo separado da tela de login para criar um ID novo sempre que o usuário acessar a página
*assim, mesmo que alguém entre no site com a intenção de roubar o id de algum usuário
*um novo ID sempre será gerado para evitar que o o ID seja roubado previamente e usado posteriormente*/

echo session_id();

var_dump($_SESSION);

?>