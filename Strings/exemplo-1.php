<?php
$nome = "Ana Luiza";

$nome1 = 'Barreto Marinho';

var_dump($nome, $nome1);

// As aspas duplas vão retornar o valor da variável, ele faz uma busca da variável, interpolação de variável
echo "ABC $nome";

// As aspas simples vão retornar o valor $nome, sem levar em consideração o valor da variável
echo 'ABC $nome';
