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

// Herança:
class Programador extends Pessoa {
    public function verDados() {

        // verificar de que classe a função está sendo chamada
        echo get_class($this);

        echo "<br> $this->nome <br>";
        echo "$this->idade <br>";
        echo "$this->senha <br>";
    }
}

$objeto = new Programador();

echo "$objeto->nome <br>";

// echo "$objeto->idade <br>";

// echo "$objeto->senha <br>";

// O método que vai ser chamado vai ser o método que está na classe programador, a classe programador não vai conseguir ver a senha
$objeto->verDados();