<?php

// Você consegue registrar mais de uma função como função de autoload
// Funções spl são funções feitas justamente para resolver determinadas lacunas
function incluirClasses($nomeClasse) {
    
    // verificando se o arquivo da classe já existe
    if(file_exists("$nomeClasse.php") === true){
        require_once("$nomeClasse.php");
    } 
}

spl_autoload_register("incluirClasses");

// Requerindo uma classe de outra pasta
spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstract" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
        require_once("Abstract" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    } 
});

$carro = new DelRey();
$carro->acelerar(150);