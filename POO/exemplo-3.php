<?php
require_once("validacaoCPF.php");

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        // :: server para usar métodos estáticos
        $resultado = Documento::validarCPF($numero);

        // Se resultado for falso
        if (!$resultado) {
            throw new Exception("CPF informado não é válido");
        }

        $this->numero = $numero;
    }

    public static function validarCPF($cpf):bool {
        return validaCPF($cpf);
    }
}

$cpf = new Documento();
$cpf->setNumero("49148839027");

var_dump($cpf->getNumero());
