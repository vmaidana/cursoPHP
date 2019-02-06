<?php

namespace Cliente;

class Cadastro extends \Cadastro { // volta na raíz da pasta e procura o arquivo
    public function registrarVenda() {
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}

?>