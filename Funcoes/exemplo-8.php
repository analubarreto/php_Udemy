<?php

// DECLARAÇÃO DE TIPO DE RERTORNO: conversão do tipo de dado no retorno :string/:float/:int
function soma(int ...$valores):string {

    return array_sum($valores);

}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
// aqui ele vai ignorar os números depois do ponto
echo soma(1.5,3.2);