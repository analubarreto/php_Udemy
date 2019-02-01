<?php

class Carro {

    // Atributos
    private $modelo;
    private $motor;
    private $ano;

    // Getters e Setters
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getMotor():float {
        return $this->motor;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function getAno():int {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    // Métodos
    public function exibir() {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
    // Fim declaração da Classe Carro
}

// Erro fatal: o script está correto, mas na hora de executar deu algum erro, é o caso de eu tentar acessar uma propriedade privada de uma classe

// Declaração de um novo Carro
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());