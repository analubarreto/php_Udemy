<?php

$dt = new DateTime();

// Especificicar um período
// P: periodo, 15, D: dias
$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/Y H:i:s");

// -> chama um método, add espera como parâmetro outra classe que guarda intervalo de período
// Somando 15 dias, a partir do objeto periodo
$dt -> add($periodo);

echo "<br>";
echo $dt -> format("d/m/Y H:i:s");


