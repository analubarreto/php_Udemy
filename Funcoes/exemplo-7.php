<?php

// DECLARAÇÃO DE TIPOS ESCALARES: todos os parâmentros passados para essa função serão inteiros
function soma(int ...$valores) {

    return array_sum($valores);

}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
// aqui ele vai ignorar os números depois do ponto
echo soma(1.5,3.2);