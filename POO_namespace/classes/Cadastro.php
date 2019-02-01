<?php

class Cadastro {

    // Atributos
    private $nome;
    private $email;
    private $senha;

    // Getters
    public function getNome():string {
        return $this->nome;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function getSenha():string {
        return $this->senha;
    }

    // Setters
    public function setNome($nome) {
        $this->nome=$nome;
    }

    public function setEmail($email) {
        $this->email=$email;
    }

    public function setSenha($senha) {
        $this->senha=$senha;
    }

    // Métodos
    public function __toString() {
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }

}