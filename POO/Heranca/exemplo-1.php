<?php
require_once("../validacaoCPF.php");

class Documento {

    // Atributos
    private $numero;

    // Getters e setters
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($num) {
        $this->numero = $num;
    }
}

class CPF extends Documento {

    // Métodos
    public function validarCPF():bool {
        $numeroCPF = $this->getNumero();
        return validaCPF($numeroCPF);
    }
}

$doc = new CPF();

$doc->setNumero("111222333-44");

echo "<br>";

var_dump($doc->validarCPF());