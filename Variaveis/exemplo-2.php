<?php
$nome1 = "Ana";
$sobreNome = "Luiza";
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.99;
$bloqueio = false;

echo $nome1 . " " .$sobreNome;

// php para o código a partir desse ponto:
exit;

// verificar existência da variável
if (isset($nome1)) {
    echo $nome1;
}

// excluir variáveis
unset($nome1);