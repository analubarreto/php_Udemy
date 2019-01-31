<?php
$pessoas = array();

// Criar um array bi-dimencional com a função array
array_push($pessoas, array(
    'nome' => 'Ana',
    'idade' => 26
));

print_r($pessoas[0]['nome']);