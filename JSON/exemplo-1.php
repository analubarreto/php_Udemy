<?php

$pessoas = array();

// Criar um array bi-dimencional com a função array
array_push($pessoas, array(
    'nome' => 'Ana',
    'idade' => 26
));

array_push($pessoas, array(
    'nome' => 'Mandachuva',
    'idade' => 2
));

// Criar JSON a partir do array
echo json_encode($pessoas);