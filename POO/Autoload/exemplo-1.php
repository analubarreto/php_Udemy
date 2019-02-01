<?php
// Autoload, é colocado em um arquivo de configuração do php e serve para carregar as classes necessárias sempre que elas forem usadas, sem a necessidade de chama-las dentro do arquivo através do require
// É importante que o nome do arquivo, tenha o mesmo nome da classe
function __autoload($nomeClasse) {

    require_once("$nomeClasse.php");
    // Vem, exatamente o nome da classe
    // var_dump($nomeClasse);
}

$carro = new DelRey();
$carro->acelerar(150);