<?php

abstract class Animal {
    public function falar() {
        return "SOM";
    }

    public function mover() {
        return "ANDA";
    }

}

class Cachorro extends Animal {
    public function falar() { // polimorfismo. mesmo nome, função diferente
        return "LATE";               
    }

}

class Gato extends Animal {
    public function falar() {
        return "MIA";
    }
}

class Passaro extends Animal {
    public function falar() {
        return "CANTA";
    }

    public function mover() {
        return "VOA E " . parent::mover(); // POLIMORFISMO, USA UM NOVO MÉTODO E CHAMA O MÉTODO DA CLASSE MÃE
    }
}

$pluto = new Cachorro();

echo $pluto->falar(). '<br>';
echo $pluto->mover(). '<br>';

$garfield = new Gato();

echo $garfield->falar(). '<br>';
echo $garfield->mover(). '<br>';

$ave = new Passaro();

echo $ave->falar(). '<br>';
echo $ave->mover(). '<br>';


?>