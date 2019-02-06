<?php

interface Veiculo { // inteface obriga a classe que a implementa a usar os métodos e atributos definidos por ela
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
    public function acelerar($velocidade) {
        echo "O veículo acelerou até ". $velocidade . " km/h. ";
    }

    public function frear($velocidade) {
        echo "O veículo freou até ". $velocidade. " km/h. ";
    }

    public function trocarMarcha($marcha){
        echo "O veículo engatou a ". $marcha. " marcha.";
    }
}

$carro = new Civic;

$carro->acelerar('160');
$carro->frear('20');
$carro->trocarMarcha('segunda');

?>