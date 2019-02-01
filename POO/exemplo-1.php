<?php

class Pessoa {

    public $nome;
    
    public function falar() {
        return "O meu nome é $this->nome";
    }

}

// Os parenteses existem, mas não são necessários, colocar é boa prática de programação
$glaucio = new Pessoa();
$glaucio -> nome = "Glaucio Daniel";

echo $glaucio -> falar();