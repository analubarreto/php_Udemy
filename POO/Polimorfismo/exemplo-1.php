<?php
// Métodos com o mesmo nome em classes herdadas tem o comportamento diferente

abstract class Animal {
    public function falar() {
        return "Som";
    }

    public function mover() {
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Late";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Mia";
    }
}

class Passaro extends Animal {
    public function falar() {
        return "Canta";
    }

    public function mover() {
        // Tá fazendo polimorfismo, mas está chamando também o método mover da classe animal
        return "Voa" . " e " . parent::mover();
    }
}

$pluto = new Cachorro;
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "------------------------------------ <br>";

$mandachuva = new Gato;
echo $mandachuva->falar() . "<br>";
echo $mandachuva->mover() . "<br>";

echo "------------------------------------ <br>";

$piupiu = new Passaro;
echo $piupiu->falar() . "<br>";
echo $piupiu->mover() . "<br>";