<?php

class Pessoa {
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = '123456';

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa {

    public function verDadosProgramador(){

        echo get_class($this) . "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
    
}

$objeto = new Pessoa();
$objeto2 = new Programador();

echo $objeto->nome . "<br>";
// propridade protegida gera erro fatal ao ser acessada. somente a classe mãe e as herdeiras acessam
//echo $objeto->idade . "<br>"; 
// idem. proprieadade privada nem mesmo classes herdeiras conseguem acessar
//echo $objeto->idade . "<br>"; 

$objeto->verDados(); // método público da mesma classe consegue acessar todos os dados
echo "<br>";
$objeto2->verDadosProgramador(); // propriedade private não é acessada por classe  herdeira

?>