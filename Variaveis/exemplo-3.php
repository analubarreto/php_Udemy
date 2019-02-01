<?php
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.99;
$bloqueio = false;

////////////////////////////////////////////////

$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];

$nascimento = new DateTime();

// var_dump($nascimento);

////////////////////////////////////////////////

// variável do tipo resource
$arquivo = fopen("exemplo-2.php", "r");

// var_dump($arquivo);

// nulo é ausência de valor não está aramazendo na memória, vazio o espaço na memória está reservado
$nulo = NULL;
$vazio = " ";