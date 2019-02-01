<?php

class Pessoa {

    // Atributos
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    // Métodos
    public function verDados() {
        echo "$this->nome <br>";
        echo "$this->idade <br>";
        echo "$this->senha <br>";
    }
}

$objeto = new Pessoa();

// Quando é público, todo mundo pode ver
echo "$objeto->nome <br>";

// Um atributo protected só pode ser acessado dentro da classe mãe ou dentro de uma classe que herda o atributo
// echo "$objeto->idade <br>";

// O privado é mais protegido que o protected, nem os herdeiros vão conseguir acessar os métodos/atributos privados
// echo "$objeto->senha <br>";

// Como você deu um atributo publico para o método verDados, os dados tem que aparecer na tela
$objeto->verDados();