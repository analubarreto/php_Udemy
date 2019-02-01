<?php
class Endereco {

    // Atributos
    private $logradouro;
    private $numero;
    private $cidade;
    private $estado;
    private $pais;

    // Isso é um método construtor, conhecido em php como método mágico
    // Os nomes dos parâmetros não precisam ser iguais aos nomes dos atributos
    public function __construct($logadouro, $numero, $cidade, $estado, $pais) {
        $this->logradouro = $logadouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
    }

    // Chamado quando o objeto é removido da memória (quando o código chegar no fim da execução ou se você falar que quer que tire da memória)
    // Para "matar" algumas variáveis, deslogar de um banco de dados
    // É a última coisa que vai ser executada antes de librar a meória
    public function __destruct() {
        var_dump("DESTRUIR");
    }

    // converter um objeto para string
    public function __toString() {
        return "$this->logradouro, $this->numero - $this->cidade($this->estado, $this->pais)";
    }

}

$meuEndereco = new Endereco("CA 10", "596", "Brasília", "DF", "Brasil");

echo $meuEndereco;