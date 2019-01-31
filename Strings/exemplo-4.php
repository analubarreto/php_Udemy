<?php

$frase = "A repetição é a mãe da repetição";

// retorna qual é a posição da palavra especificada
$q = strpos($frase, "mãe");
$palavra = "mãe";

// retorna tudo o que vem antes da palavra especificada
$texto = substr($frase, 0, $q);

// retorna o texto que vem depois da palavra especificada, com ela inclusa
$texto2 = substr($frase, $q);

// se você não quiser que a palavra especificada seja inclusa...
$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto);
echo "</br>";
var_dump($q);
echo "</br>";
var_dump($texto2);
echo "</br>";
var_dump($texto3);