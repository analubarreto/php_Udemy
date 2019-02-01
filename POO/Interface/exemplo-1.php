<?php
//INTERFACE

// É um padrão utilizado para criar determinada classe, ele diz os atributos e os métodos que cada classe tem que ter
// Uma classe pode aplicar mais de uma interface
// Ter uma interface não quer dizer que a classe só pode ter aqueles métodos e atributos, mas quer dizer que ela tem NECESSÁRIAMENTE que ter aqueles métodos e atributos
// Interface ajuda a organizar seu código, trabalhar em equipe e, principalmente na integração de API's (códigos de terceiros)

interface Veiculo {

    // métodos
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

// Para implementar várias interfaces, você tem que colocar vírgula entre uma e outra
class Civic implements Veiculo {

    // o nome do parâmetro não precisa ser exatamente o mesmo, mas o nome da função sim
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

$carro = new Civic();
$carro->trocarMarcha(1);