<?php

require_once('config.php');

echo session_save_path() . "<br>"; // obtém ou define o caminho para armazenamento da sessão atual

var_dump(session_status()); // retorna o status da sessão atual


switch(session_status()) {
    case PHP_SESSION_DISABLED:
    echo "as sessões estão desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo "as sessões estão habilitadas, mas nenhuma existe";
    break;

    case PHP_SESSION_ACTIVE:
    echo "as sessões estão habilitadas, e uma existe ";
    break;
}

?>