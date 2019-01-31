<?php

$a = 10;

// o & significa passagem de parâmetro por referência, ou seja o que acontece na função, segura o valor na variável porque você está passando para a função A REFERÊNCIA do endereço de memória da variável
// Isso é diferente de variável global, que é quando eu quero que a variável seja enchergada em todos os luares do código
function trocaValor(&$b) {
    $b += 50;
    return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
