<?php

// No php7 a gente pode usar namespace para funções e para outras coisas também
namespace Cliente;

// Volta na raiz e pega a classe Cadastro que está lá
class Cadastro extends \Cadastro {

    public function registrarVenda() {
        echo "Foi registrada uma venda para o cliente $this->getNome()";
    }

}