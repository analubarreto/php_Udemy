<?php
// CLASSES ABSTRATAS

// Simulares à interfaces, com a difenreça de que, nas classes abstratas, nós, não somente temos que definir o que os métodos tem que ter, mas também o que eles fazem
// Classe abstrata x classe comum: o objeto nunca vai instaciar uma classe abstrata, pra usá-la temos que criar uma segunda classe que vai extender dessa classe
// A funcionalidade da classe abstrata é você já dizer o que os métodos tem que fazer, é uma forma de organização, de definir alguns requisitos que uma classe tem que ter
// Uma classe vai herdar SÓ DE UMA CLASSE ABSTRATA

interface Veiculo {

    // métodos
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

// Qualquer automóvel implementa a interface veículo, só que ninguém pode instanciar um automóvel, tem que falar que automóvel que é
abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veículo acelerou até $velocidade km/h";
    }

    public function frenar($velocidade) {
        echo "O veiculo frenou até $velocidade km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha $marcha";
    }

}

class DelRey extends Automovel {

    public function empurrar() {

    }
}

// Instanciar uma classe abstrata joga um Fatal Error
// $carro = new Automovel();

$carro = new DelRey();
$carro->acelerar(200);